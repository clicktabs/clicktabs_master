<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\QaList;
use App\Models\Schedule;

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
            $data= QaList::all();
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
                return '<a href="/task-form/'.$row->patient_id.'" target="_blank"><b>'.$row->schedule->patient->first_name.' ' .$row->schedule->patient->last_name.'</b></a>';
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

        return view('patients.qa');
    }
}
