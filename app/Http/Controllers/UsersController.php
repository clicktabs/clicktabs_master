<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Addon;
use App\Models\Organization;
use App\Models\User;
use App\Models\Account;
use App\Models\UserInfo;
use App\Traits\AlertUtils;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\AddonSubCategories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Intervention\Image\Facades\Image;
use App\Models\SubscriptionPlan;
use App\Models\Subscription;

class UsersController extends Controller
{
    use AlertUtils;

    public function __construct()
    {
        $this->middleware('permission:user-list');
        $this->middleware('permission:user-create', ['only' => ['create', 'store', 'edit', 'update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy', 'delete']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $organization_id = Auth::user()->organization_id;
        $users = User::all();
        if(Auth::user()->roles[0]["name"]   !==  "super-admin") {
            $users = User::where('organization_id', '=', $organization_id)->get();
        }
        return view('users.index', compact('users'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequest $request
     * @return RedirectResponse
     */
    public function store(UserRequest $request)
    {
        $roles = explode(",",$request->roles[0]);

        if(Auth::user()->roles[0]["name"] !== "super-admin") {
            if(in_array( "super-admin" , $roles)) {
                if (($key = array_search("super-admin", $roles)) !== false) {
                    unset($roles[$key]);
                }
            }
        }

        $validated = $request->all();
        $validated['user_code'] = generate_random_token();
        $validated['created_by'] = Auth::id();
        $validated['password'] = Hash::make($request->input('password'));

        if(Auth::user()->roles[0]["name"]!="super-admin") {
            $organization_id = Auth::user()->organization_id;
        } else {
            $organization_id = $validated['organization_id'];
        }

        $user = User::create([
            'user_code' => $validated['user_code'],
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'organization_id' => $organization_id,
            // 'roles_id'=>json_encode($validated['roles']) ,
            'created_by' => $validated['created_by'],
        ]);

        UserInfo::create([
            'user_id' => $user->id,
            'phone_number' => $validated['phone_number'],
            'dob' => $validated['dob'],
            'address' => $validated['address'],
        ]);
        $user->assignRole($roles);
        $message = 'Success. '. $user->full_name . ' was created successfully.';
        return redirect()->route('users.index')->with('success', $message);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        $roles =Role::get();
        // $roles = Addon::where('name','Roles')->with('addonSubCategories')->get();
        $organizations = Organization::active()->get();
        $userOrg = Auth::user()->organization_id;
        return view('users.create', compact('roles', 'organizations', 'userOrg'));
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return View
     */
    public function edit(User $user)
    {
        $userRoleNames =$user->getRoleNames();
        $roles = Role::get();
        $userRole = $user->all();
        $organizations = Organization::active()->get();
        $userOrg = Auth::user()->organization_id;
        return view('users.edit', compact('user','userRole', 'roles', 'organizations', 'userOrg','userRoleNames'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(Request $request, User $user)
    {

        $roles = explode(",",$request->roles[0]);

        if(Auth::user()->roles[0]["name"] !== "super-admin") {
            if(in_array( "super-admin" , $roles)) {
                if (($key = array_search("super-admin", $roles)) !== false) {
                    unset($roles[$key]);
                }
            }
        }

        $organization_id = $request->input('organization_id');
        if(Auth::user()->roles[0]["name"]   !== "super-admin") {
            $organization_id = Auth::user()->organization_id;
        }

        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->organization_id = $organization_id;
        DB::table('model_has_roles')->where('model_id', $user->id)->delete();
        $user->assignRole($roles);

        if ($request->has('password') && $request->input('password') !== null) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->push();

        $userInfo = $user->user_info()->firstOrCreate([]);
        $userInfo->user_id = $user->id;
        $userInfo->phone_number = $request->input('phone_number');
        $userInfo->dob = $request->input('dob');
        $userInfo->address = $request->input('address');
        $userInfo->save();

        $message = 'Success. '. $user->full_name . ' was updated successfully.';
        return redirect()->route('users.index')->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return RedirectResponse
     */
    public function destroy(User $user)
    {
        $user->delete();
        DB::table('model_has_roles')->where('model_id', $user->id)->delete();
        $message = 'Success. '. $user->full_name . ' was removed successfully.';
        return redirect()->route('users.index')->with('success', $message);
    }

    public function account()
    {
        $user = Auth::user();
        $account = Account::where('user_id', $user->id)->first();
        $subscription = Addon::where('name', 'like', 'Subscriptions%')->where('status', '1')->first();
        $subscriptions = $subscription ? $subscription->addonSubCategories :null;
        $subscriptionPlans = SubscriptionPlan::where('status', 'active')->get();
        $existingSubscription = Subscription::where('organization_id', $user->organization_id)->first();

        return view('profile.my-account', compact('user', 'subscriptions','account','subscriptionPlans', 'existingSubscription'));
    }

    public function accountUpdate(Request $request)
{
    // return $request->all();
    $userId = Auth::id();
    $account = Account::where('user_id', $userId)->first();

    // Validate the form data
    $validatedData = $request->validate([
        'company_name' => 'nullable|string',
        'contact_person_firstname' => 'required|string',
        'contact_person_lastname' => 'nullable|string',
        'address_line' => 'nullable|string',
        'city' => 'nullable|string',
        'state' => 'nullable|string',
        'zip' => 'nullable|string',
        'phone' => 'required|string',
        'fax' => 'nullable|string',
        'email' => 'nullable|email',
        'npi' => 'nullable|string',
        'tax_id' => 'nullable|string',
        'secondary_tax' => 'nullable|string',
        'medicaid_p_n' => 'nullable|string',
        'medicare_p_n' => 'nullable|string',
        'provider_contract' => 'nullable|string',
        'caphs_vendor_id' => 'nullable|string',
        'unique_agency_oasis' => 'nullable|string',
        'dme_medicaid_p_i' => 'nullable|string',
    ]);

    if ($account) {
        // Update the existing account attributes with the validated form data
        $account->fill($validatedData);
    } else {
        // Create a new account with the user ID and the validated form data
        $validatedData['user_id'] = $userId;
        $account = Account::create($validatedData);
    }

    $image = $request->file('image');
    if (!empty($image)) {
        $imageName = uniqid('image') . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('accountImage'), $imageName);
        $account->image = 'accountImage/' . $imageName;
    } else {

    }



    // Save the updated or new account to the database
    $account->save();

    // return response()->json(['message' => 'Account updated successfully']);
    return redirect()->back()->with('success', 'Account updated successfully');
}

public function uploadSignature(Request $request)
{
    $signatureData = $request->input('signatureImage');
    $passwords = $request->input('password');
    $pin = $request->input('pin');
    $confirmPin = $request->input('confirmPin');
    $userPassword = Auth::user()->password;

    if (!empty($pin) && !empty($confirmPin) && !empty($passwords)) {
        if ($pin == $confirmPin) {
                if (Hash::check($passwords, $userPassword)) {
                    // Save the signature image to a file
                    $image = Image::make($signatureData);
                    $filename = time() . '.png'; // Generate a unique filename
                    $image_path = public_path('signatures/' . $filename);
                    $image->save($image_path);

                    // Save the signature in the database
                    $userId = Auth::id();
                    $signatureModel = Account::where('user_id', $userId)->first();
                    $signatureModel->signature = 'signatures/'. $filename;
                    $signatureModel->pin = $pin;
                    $signatureModel->save();
                    return response()->json(['success' => 'Signature saved successfully!']);
                } else {
                    return response()->json(['danger' => 'Password not currect!']);
                }
            } else {
                return response()->json(['danger' => 'Pin not match!']);
            }
    } else {
        return response()->json(['danger' => 'Enter form data!']);
    }
}

    public function company_info(){
        $users = DB::select('select * from accounts');
        return view('account',['users'=>$users]);
    }

    public function checkPin(Request $request)
    {
        $pin = $request->input('pin');

        $account = Account::where('pin', $pin)->first();

        if ($account->pin === $pin) {
            return response()->json([
                'message' => 'Signature added successfully!',
                'signature' => $account->signature
            ]);
        } else {
            return response()->json(['error' => 'Incorrect PIN'], 401);
        }
    }

}


