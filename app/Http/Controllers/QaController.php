<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\QaList;
use App\Models\Schedule;
use App\Models\Addon;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use DataTables;

class QaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data= QaList::where('status', '!=', 1)->get();
            // $data = Patient::select('first_name', 'middle_name', 'last_name', 'patient_code')->where()->;

            if($request->filled('from_date') && $request->filled('to_date'))
            {
                $data = $data->whereBetween('created_at', [$request->from_date, $request->to_date]);
            }

            return DataTables::of($data)->addIndexColumn()
            ->addColumn('id', function ($row) {
                return '<input type="checkbox" name="id" value="'.$row->id.'">';
             })
             ->addColumn('name', function ($row) {
                return '<div class="flex items-center fe"><a href="/task-form/'.$row->schedule->id.'" target="_blank"><b>'.$row->schedule->patient->first_name.' ' .$row->schedule->patient->last_name.'</b></a><span><svg class="w-3 h-3 ub nz du text-[#000] ao" viewBox="0 0 12 12"><path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path></svg></span></div>';
             })
             ->addColumn('mrn', function ($row) {
                return $row->schedule->patient->patient_code;
             })
             ->addColumn('event_date', function ($row) {
                return $row->created_at;
             })
             ->addColumn('type', function ($row) {
                return '<button class="me-2 text-secondary"><i class="fa-solid fa-dollar-sign"></i></button>
                <button class="me-2 text-secondary"><i class="fa-solid fa-percent"></i></button>
                <button class="text-secondary"><i class="fa-solid fa-heart"></i></button>';
             })
             ->addColumn('task', function ($row) {
                return $row->schedule->task;
             })
             ->addColumn('status', function ($row) {
                if ($row->status == 1) {
                    return 'Completed';
                }elseif ($row->status == 0) {
                    return 'Submitted (Pending QA Review)';
                }elseif ($row->status == 2) {
                    return 'Rejected';
                }else {
                    return 'Pending';
                }

             })
             ->addColumn('notes', function ($row) {
                return '<button class="me-2"><i class="fa-regular fa-file" style="color: #bbb"></i></button>
                <button class="me-2"><i class="fa-regular fa-file" style="color: #bbb"></i></button>
                <button><i class="fa-regular fa-file" style="color: #bbb"></i></button>';
             })
             ->addColumn('assigned_to', function ($row) {
                return $row->schedule->employee->first_name.' '.$row->schedule->employee->last_name;
             })
             ->rawColumns(['id', 'name', 'type', 'task', 'notes'])
             ->setRowAttr([
                'data-id' => function($row) {
                    return $row->id;
                },
            ])
            ->make(true);
        }

        $organization_id = Auth::user()->organization_id;
        $adon = Addon::where('name', 'like', 'Tasks%')->where('status', '1')->first();
        $tasks = get_sub_addons($adon, $organization_id);

        return view('patients.qa', compact('tasks'));
    }

    public function updateStatus(Request $request)
    {
        $status = $request->input('status');
        $qa_id = $request->input('qa_id');

        $qaList = QaList::updateOrInsert(
            ['schedule_id' => $qa_id],
            ['status' => $status]
        );
        if ($status == 1) {
            return response()->json(['success' => 'Approve Successfully!']);
        } elseif($status == 2) {
            return response()->json(['warning' => 'Rejected!']);
        }else {
            return response()->json(['danger' => 'Something went wrong!']);
        }


    }
}
