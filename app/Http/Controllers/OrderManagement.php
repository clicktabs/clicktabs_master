<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\AgencyBranch;
use App\Models\CMS;
use App\Models\PhysicianOrders;


class OrderManagement extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:orders-list', ['only' => ['index']]);
        $this->middleware('permission:orders-create', ['only' => ['create', 'store', 'update']]);
        $this->middleware('permission:orders-edit', ['only' => [ 'edit']]);
        $this->middleware('permission:orders-show', ['only' => [ 'show']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy', 'delete']]);
    }

    public function index()
{
    $cmss = CMS::with('patient', 'patient.physician')->get();
    $physicianOrders = PhysicianOrders::with('patient', 'patient.physician')->get();

    $data = [];

    foreach ($cmss as $cms) {
        $data[] = [
            'type' => 'CMS',
            'id' => $cms->id,
            'patient_name' => $cms->patient->first_name ?? 'N/A' . ' ' . $cms->patient->last_name ?? 'N/A',
            'physician_name' => $cms->patient->physician->physicianName ?? 'N/A',
            'patient_id' => $cms->patient_history_id ?? 'N/A',
            'created_at' => $cms->created_at ? $cms->created_at->format('m/d/Y') : 'N/A',
            'sent_date' => $cms->sent_date ?? '',
            'sent_method' => $cms->sent_method ?? '',
            'receive_date' => $cms->receive_date ?? '',
        ];
    }

    foreach ($physicianOrders as $order) {
        $data[] = [
            'type' => 'Physician Order',
            'id' => $order->id,
            'patient_name' => $order->patient->first_name ?? 'N/A' . ' ' . $order->patient->last_name ?? 'N/A',
            'physician_name' => $order->physicianName,
            'patient_id' => $order->patient_history_id ?? 'N/A',
            'created_at' => $order->created_at ? $order->created_at->format('m/d/Y') : 'N/A',
            'sent_date' => $order->sent_date ?? '',
            'sent_method' => $order->sent_method ?? '',
            'receive_date' => $order->receive_date ?? '',
        ];
    }

    return view('order-management.index', compact('data'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function order(){
        $branch = AgencyBranch::all();
        return view('index',['branch'=>$branch]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
