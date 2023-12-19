<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HHServiceRequest;
use Validator;

class HhServiceRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = HHServiceRequest::all();
        return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'visit_type'=>'required',
            'srf_name'=>'required',
            'date_of_req'=>'required',
            'rep_ndct'=>'required',
            'rep_tel_ext'=>'required',
            'phy_order_soc_date_picker'=>'required',
            'no_spec_soc_date'=>'required',
            'ur_datePickert'=>'required',
            'pt_name'=>'required',
            'pt_dob'=>'required',
            'pt_gender'=>'required',
            'pt_address'=>'required',
            'pt_apt_floor'=>'required',
            'pt_tel_no'=>'required',
            'ad_wh_v_address'=>'required',
            'ad_wh_v_apt_floor'=>'required',
            'ad_wh_v_tel_no'=>'required',
            'pt_medicare_no'=>'required',
            'pt_med_dss_idNo'=>'required',
            'pt_auth_req'=>'required',
            'pt_auth_rec'=>'required',
            'pt_other_ins_care'=>'required',
            'pt_pol_claim_no'=>'required',
            'pt_type_of_cov'=>'required',
            'pt_hos_adm_date'=>'required',
            'pt_host_disc_date'=>'required',
            'mi_dia_primary'=>'required',
            'mi_dia_secondary'=>'required',
            'mi_dia_sur_date'=>'required',
            'mi_smsh'=>'required',
            'mi_prog'=>'required',
            'mi_ther_goal'=>'required',
            'mi_diag_kn_by'=>'required',
            'mi_diag_not_kn_exp'=>'required',
            'doc_req'=>'required',
            'po_ccppo'=>'required',
            'po_ppn'=>'required',
            'po_mshp_name'=>'required',
            'po_mshp_telNo'=>'required',
            'po_peh'=>'required',
            'po_est_pat'=>'required',
            'po_plan_care'=>'required',
            'po_cert_pat'=>'required',
            'po_date'=>'required',
            'ni_nur_ass_rec'=>'required',
            'ni_sup_eq'=>'required',
            'ni_admit'=>'required',
            'ni_ass_admis'=>'required',
            'ni_res_not_admit'=>'required',
            'ni_other_pro_ass'=>'required'
        ]);
        // validate error message response
        if ($validator->fails()) {
        return response()->json(['errors'=>$validator->errors()]);
        }else{
        $data=HHServiceRequest::create([
            'visit_type'=>$request->input('visit_type'),
            'srf_name'=>$request->input('srf_name'),
            'date_of_req'=>$request->input('date_of_req'),
            'rep_ndct'=>$request->input('rep_ndct'),
            'rep_tel_ext'=>$request->input('rep_tel_ext'),
            'phy_order_soc_date_picker'=>$request->input('phy_order_soc_date_picker'),
            'no_spec_soc_date'=>$request->input('no_spec_soc_date'),
            'ur_datePickert'=>$request->input('ur_datePickert'),
            'pt_name'=>$request->input('pt_name'),
            'pt_dob'=>$request->input('pt_dob'),
            'pt_gender'=>$request->input('pt_gender'),
            'pt_address'=>$request->input('pt_address'),
            'pt_apt_floor'=>$request->input('pt_apt_floor'),
            'pt_tel_no'=>$request->input('pt_tel_no'),
            'ad_wh_v_address'=>$request->input('ad_wh_v_address'),
            'ad_wh_v_apt_floor'=>$request->input('ad_wh_v_apt_floor'),
            'ad_wh_v_tel_no'=>$request->input('ad_wh_v_tel_no'),
            'pt_medicare_no'=>$request->input('pt_medicare_no'),
            'pt_med_dss_idNo'=>$request->input('pt_med_dss_idNo'),
            'pt_auth_req'=>$request->input('pt_auth_req'),
            'pt_auth_rec'=>$request->input('pt_auth_rec'),
            'pt_other_ins_care'=>$request->input('pt_other_ins_care'),
            'pt_pol_claim_no'=>$request->input('pt_pol_claim_no'),
            'pt_type_of_cov'=>$request->input('pt_type_of_cov'),
            'pt_hos_adm_date'=>$request->input('pt_hos_adm_date'),
            'pt_host_disc_date'=>$request->input('pt_host_disc_date'),
            'mi_dia_primary'=>$request->input('mi_dia_primary'),
            'mi_dia_secondary'=>$request->input('mi_dia_secondary'),
            'mi_dia_sur_date'=>$request->input('mi_dia_sur_date'),
            'mi_smsh'=>$request->input('mi_smsh'),
            'mi_prog'=>$request->input('mi_prog'),
            'mi_ther_goal'=>$request->input('mi_ther_goal'),
            'mi_diag_kn_by'=>$request->input('mi_diag_kn_by'),
            'mi_diag_not_kn_exp'=>$request->input('mi_diag_not_kn_exp'),
            'doc_req'=>$request->input('doc_req'),
            'po_ccppo'=>$request->input('po_ccppo'),
            'po_ppn'=>$request->input('po_ppn'),
            'po_mshp_name'=>$request->input('po_mshp_name'),
            'po_mshp_telNo'=>$request->input('po_mshp_telNo'),
            'po_peh'=>$request->input('po_peh'),
            'po_est_pat'=>$request->input('po_est_pat'),
            'po_plan_care'=>$request->input('po_plan_care'),
            'po_cert_pat'=>$request->input('po_cert_pat'),
            'po_date'=>$request->input('po_date'),
            'ni_nur_ass_rec'=>$request->input('ni_nur_ass_rec'),
            'ni_sup_eq'=>$request->input('ni_sup_eq'),
            'ni_admit'=>$request->input('ni_admit'),
            'ni_ass_admis'=>$request->input('ni_ass_admis'),
            'ni_res_not_admit'=>$request->input('ni_res_not_admit'),
            'ni_other_pro_ass'=>$request->input('ni_other_pro_ass')
        ]);
        }
        return response()->json(['msg'=>'Data Submitted Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singleData=HHServiceRequest::find($id);
        return $singleData;
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
        $validator = Validator::make($request->all(), [
            'visit_type'=>'required',
            'srf_name'=>'required',
            'date_of_req'=>'required',
            'rep_ndct'=>'required',
            'rep_tel_ext'=>'required',
            'phy_order_soc_date_picker'=>'required',
            'no_spec_soc_date'=>'required',
            'ur_datePickert'=>'required',
            'pt_name'=>'required',
            'pt_dob'=>'required',
            'pt_gender'=>'required',
            'pt_address'=>'required',
            'pt_apt_floor'=>'required',
            'pt_tel_no'=>'required',
            'ad_wh_v_address'=>'required',
            'ad_wh_v_apt_floor'=>'required',
            'ad_wh_v_tel_no'=>'required',
            'pt_medicare_no'=>'required',
            'pt_med_dss_idNo'=>'required',
            'pt_auth_req'=>'required',
            'pt_auth_rec'=>'required',
            'pt_other_ins_care'=>'required',
            'pt_pol_claim_no'=>'required',
            'pt_type_of_cov'=>'required',
            'pt_hos_adm_date'=>'required',
            'pt_host_disc_date'=>'required',
            'mi_dia_primary'=>'required',
            'mi_dia_secondary'=>'required',
            'mi_dia_sur_date'=>'required',
            'mi_smsh'=>'required',
            'mi_prog'=>'required',
            'mi_ther_goal'=>'required',
            'mi_diag_kn_by'=>'required',
            'mi_diag_not_kn_exp'=>'required',
            'doc_req'=>'required',
            'po_ccppo'=>'required',
            'po_ppn'=>'required',
            'po_mshp_name'=>'required',
            'po_mshp_telNo'=>'required',
            'po_peh'=>'required',
            'po_est_pat'=>'required',
            'po_plan_care'=>'required',
            'po_cert_pat'=>'required',
            'po_date'=>'required',
            'ni_nur_ass_rec'=>'required',
            'ni_sup_eq'=>'required',
            'ni_admit'=>'required',
            'ni_ass_admis'=>'required',
            'ni_res_not_admit'=>'required',
            'ni_other_pro_ass'=>'required'
        ]);
        // validate error message response
        if ($validator->fails()) {
        return response()->json(['errors'=>$validator->errors()]);
        }else{
        $data=HHServiceRequest::where('id',$id)->update([
            'visit_type'=>$request->input('visit_type'),
            'srf_name'=>$request->input('srf_name'),
            'date_of_req'=>$request->input('date_of_req'),
            'rep_ndct'=>$request->input('rep_ndct'),
            'rep_tel_ext'=>$request->input('rep_tel_ext'),
            'phy_order_soc_date_picker'=>$request->input('phy_order_soc_date_picker'),
            'no_spec_soc_date'=>$request->input('no_spec_soc_date'),
            'ur_datePickert'=>$request->input('ur_datePickert'),
            'pt_name'=>$request->input('pt_name'),
            'pt_dob'=>$request->input('pt_dob'),
            'pt_gender'=>$request->input('pt_gender'),
            'pt_address'=>$request->input('pt_address'),
            'pt_apt_floor'=>$request->input('pt_apt_floor'),
            'pt_tel_no'=>$request->input('pt_tel_no'),
            'ad_wh_v_address'=>$request->input('ad_wh_v_address'),
            'ad_wh_v_apt_floor'=>$request->input('ad_wh_v_apt_floor'),
            'ad_wh_v_tel_no'=>$request->input('ad_wh_v_tel_no'),
            'pt_medicare_no'=>$request->input('pt_medicare_no'),
            'pt_med_dss_idNo'=>$request->input('pt_med_dss_idNo'),
            'pt_auth_req'=>$request->input('pt_auth_req'),
            'pt_auth_rec'=>$request->input('pt_auth_rec'),
            'pt_other_ins_care'=>$request->input('pt_other_ins_care'),
            'pt_pol_claim_no'=>$request->input('pt_pol_claim_no'),
            'pt_type_of_cov'=>$request->input('pt_type_of_cov'),
            'pt_hos_adm_date'=>$request->input('pt_hos_adm_date'),
            'pt_host_disc_date'=>$request->input('pt_host_disc_date'),
            'mi_dia_primary'=>$request->input('mi_dia_primary'),
            'mi_dia_secondary'=>$request->input('mi_dia_secondary'),
            'mi_dia_sur_date'=>$request->input('mi_dia_sur_date'),
            'mi_smsh'=>$request->input('mi_smsh'),
            'mi_prog'=>$request->input('mi_prog'),
            'mi_ther_goal'=>$request->input('mi_ther_goal'),
            'mi_diag_kn_by'=>$request->input('mi_diag_kn_by'),
            'mi_diag_not_kn_exp'=>$request->input('mi_diag_not_kn_exp'),
            'doc_req'=>$request->input('doc_req'),
            'po_ccppo'=>$request->input('po_ccppo'),
            'po_ppn'=>$request->input('po_ppn'),
            'po_mshp_name'=>$request->input('po_mshp_name'),
            'po_mshp_telNo'=>$request->input('po_mshp_telNo'),
            'po_peh'=>$request->input('po_peh'),
            'po_est_pat'=>$request->input('po_est_pat'),
            'po_plan_care'=>$request->input('po_plan_care'),
            'po_cert_pat'=>$request->input('po_cert_pat'),
            'po_date'=>$request->input('po_date'),
            'ni_nur_ass_rec'=>$request->input('ni_nur_ass_rec'),
            'ni_sup_eq'=>$request->input('ni_sup_eq'),
            'ni_admit'=>$request->input('ni_admit'),
            'ni_ass_admis'=>$request->input('ni_ass_admis'),
            'ni_res_not_admit'=>$request->input('ni_res_not_admit'),
            'ni_other_pro_ass'=>$request->input('ni_other_pro_ass')
        ]);
        }
        return response()->json(['msg'=>'Data Updated Successfully']);   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = HHServiceRequest::find($id);
        $data->delete();
        return response()->json(['msg'=>'Data Deleted Successfully']);
    }
}
