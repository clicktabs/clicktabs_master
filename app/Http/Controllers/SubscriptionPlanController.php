<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubscriptionPlan;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;
use App\Models\Subscription;

class SubscriptionPlanController extends Controller
{
    public function __construct() {

    }

    // List all subscription plans
    public function index()
    {
        $subscriptionPlans = SubscriptionPlan::all();
        return view('subscription.dashboard', compact('subscriptionPlans'));
    }

    // Show the create form
    public function create()
    {
        return view('subscription.create');
    }

    // Store a new subscription plan
    public function store(Request $request)
    {
         // Validate input
        $request->validate([
            'package_name' => 'required|string',
            'max_patient' => 'required|integer',
            'min_patient' => 'required|integer',
            'type' => 'required|in:DOODD and home healthcare,Home healthcare,Combo,Private Care',
            'amount' => 'required|numeric',
            'status' => 'required|in:active,inactive',
        ]);

        try {
            // Create a new subscription plan
            $subscriptionPlan = SubscriptionPlan::create([
                'package_name' => $request->input('package_name'),
                'max_patient' => $request->input('max_patient'),
                'min_patient' => $request->input('min_patient'),
                'type' => $request->input('type'),
                'amount' => $request->input('amount'),
                'status' => $request->input('status'),
            ]);

            return redirect('/subscription-plans')->with('success', 'Subscription plan created successfully.');
        } catch (\Exception $e) {
            // Handle any exceptions or errors that occur during the creation process
            return redirect('/subscription-plans/create')->with('error', 'Failed to create subscription plan. Please try again.');
        }
    }

    // Show the edit form for a subscription plan
    public function edit($id)
    {
        $subscriptionPlan = SubscriptionPlan::findOrFail($id);
        return view('subscription.edit', compact('subscriptionPlan'));
    }

    // Update a specific subscription plan
    public function update(Request $request, $id)
{
    // Validate input
    $request->validate([
        'package_name' => 'required|string',
        'max_patient' => 'required|integer',
        'min_patient' => 'required|integer',
        'type' => 'required|in:DOODD and home healthcare,Home healthcare,Combo,Private Care',
        'amount' => 'required|numeric',
        'status' => 'required|in:active,inactive',
    ]);

    try {
        // Find the subscription plan by ID
        $subscriptionPlan = SubscriptionPlan::findOrFail($id);

        // Update the subscription plan with the new data
        $subscriptionPlan->update([
            'package_name' => $request->input('package_name'),
            'max_patient' => $request->input('max_patient'),
            'min_patient' => $request->input('min_patient'),
            'type' => $request->input('type'),
            'amount' => $request->input('amount'),
            'status' => $request->input('status'),
        ]);

        return redirect('/subscription-plans')->with('success', 'Subscription plan updated successfully.');
    } catch (\Exception $e) {
        // Handle any exceptions or errors that occur during the update process
        return redirect()->back()->with('error', 'Failed to update subscription plan. Please try again.');
    }
}


    // Delete a specific subscription plan
    public function destroy($id)
    {
        try {
            $subscriptionPlan = SubscriptionPlan::findOrFail($id);
            $subscriptionPlan->delete();
            return redirect('/subscription-plans')->with('success', 'Subscription plan delete successfully.');
        } catch (\Exception $e) {
            // Handle any exceptions or errors that occur during the update process
            return redirect()->back()->with('error', 'Failed to delete subscription plan. Please try again.');
        }
    }

    public function processPayment(Request $request, $planId)
    {
        // Simulated payment process
        // In a real application, you would integrate a payment gateway here and handle payment processing securely.

        // Check if the user is authenticated
        if (Auth::check()) {

            // Get the authenticated user
            $userId = Auth::id();
            $userOrganization_id = Auth::user()->organization_id;

            $existingSubscription = Subscription::where('organization_id', $userOrganization_id)
            ->where('subscription_plan_id', $planId)
            ->where('status', 'active')
            ->first();

            if ($existingSubscription) {
                // If the user already has an active subscription for the same plan, return an alert
                return redirect()->back()->with('error', 'You already have an active subscription for this plan.');
            }

            $plan = SubscriptionPlan::find($planId);


            $users = Patient::where('organization_id', '=', $userOrganization_id)->where('status', 'admit')->count();

            if ($plan->max_patient < $users) {
                return redirect()->back()->with('error', 'This Plan is not fit with your patient limit.');
            }

            // Simulate successful payment
            // In a real application, this step would involve interacting with a payment gateway
            // and handling the payment process securely.

            // Create a subscription record for the user
            Subscription::create([
                'subscription_plan_id' => $planId,
                'status' => 'pending',
                'organization_id' => $userOrganization_id,
                'expires_at' => now()->addMonths(1)
            ]);

            // Redirect the user to a success page or dashboard
            return redirect('/accounts')->with('success', 'Subscription purchased successfully.');
        }

        // If the user is not authenticated, you can handle it accordingly
        // For example, you can redirect them to the login page or display an error message.
        return redirect('/login')->with('error', 'Please log in to complete the purchase.');
    }

    public function pendingIndex()
    {
        $allSubscriptions = Subscription::all();
        return view('subscription.pendingDashboard', compact('allSubscriptions'));
    }

    public function updateSubscription(Request $request)
    {
        if(Auth::user()->roles[0]["name"] == "super-admin") {
            $subscription = Subscription::find($request->pendingId);

            $subscription->expires_at = $request->input('expire_date');
            $subscription->status = 'active';
            $subscription->update();
            return redirect()->back()->with('success', 'Subscription plan Expire date Updated.');
        }else{
            return redirect()->back()->with('error', 'Please try again.');
        }
    }
}
