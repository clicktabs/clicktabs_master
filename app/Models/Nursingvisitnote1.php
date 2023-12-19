<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nursingvisitnote1 extends Model
{
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = ['visit_date','time_in','time_out', 'type_of_visit_1', 'type_of_visit_2', 'type_of_visit_3', 'type_of_visit_4',
                        'type_of_visit_5','type_of_visit_6','Q5001', 'Q5002', 'Q5009', 'G0162', 'G0299','G0493','G0494','G0495', 'G0496', 
                        'diagnosis','homebound_reason','temperature', 'temp', 'Pulse', 'pul', 'Respirations','respiration','Weight',
                        'blood_pressure_right','blood_pressure_left','apnea_periods', 'ApneaPeriods', 'patient_experiencing', 'origin', 
                        'location','duration','intensity','relief_measures', 'demonstrated', 'p_other', 'ImplicationsCarePlan', 'LungSounds',
                        'f_location', 'wheeze_location', 'diminished', 'absent', 'absent_other', 'cough', 'productive_cough', 'amt_cough',
                        'hemoptysis_frequency','hemoptysis_frequency_amount','RespiratoryStatus', 'dyspnea', 'stridorq', 'stridor', 'saturation',
                        'denies','anginal','postural', 'localized', 'substernal', 'dull', 'aching', 'sharp','viselike','viselike_other', 'shortness_of_breath',
                        'activity', 'rest', 'duration','HeartSounds','abnormal','fatigued', 'edema', 'pedal_right', 'pedal_left', 'pitting', 'cramps',
                        'capillary_refill','alert','right_grasp', 'right-other', 'left_grasp', 'left_other', 'pupils','other_perral','impairment','impair', 
                        'impairment_vertigo', 'impairment_falls', 'impairment_bal', 'impairment_weekness', 'change_in_adl','good','fair', 'poor', 'npo', 'oral_intake', 
                        'tube_feeding','tube_feeding_cont','BowelSounds','abdominal', 'last_bm', 'incontience', 'diarrhea', 'constipation',
                        'impaction','administered','tolerated', 'urine_color', 'urine_odor', 'urine_burning', 'urine_hesitancy','nocturia','oliguria','retention',
                        'incontinence_occurs', 'cardiopulmonary_type', 'french', 'Bulbinflated','date_change','irrigated','lm', 'endocrine_blood', 'patient',
                        'caregiver', 'nurse','reported_by_other','blood_sugar_this_visit','check_by_nurse', 'glycosuria', 'polyuria', 'polydipsia', 'Sweats',
                        'polyphagia','faint','stupor', 'by_Patient', 'by_caregiver', 'by_Nurse', 'Monitored_by_other','new_or_changed','new_at_drug','dosage_frequency',
                        'effective', 'effective_other','orders_obtain', 'on_allergic','on_medication','on_food_interactions','Rx_refill_by', 'pill_count', 'ample_supply',
                        'ample_supply', 'disposal_of_sharps','Duration_of_therapy','Missed_doses','administered_by_patient_1', 'administered_by_caregiver_1',
                        'administered_by_nurse_1','administered_by_other_1', 'type_of_line','central','Implanted_port_location','catheter_length', 'evidence_of_infection',
                        'number_of_lumens', 'dressing_change', 'Performed_bypatient','Performed_bycaregiver','Performed_bynurse','Performed_bynurse_other', 'Cap_performed_bypatient',
                        'Cap_performed_bycaregiver', 'Cap_performed_bynurse', 'Cap_performed_byother', 'tubing_changed_by_patient','tubing_changed_by_caregiver',
                        'tubing_changed_by_nurse', 'tubing_changed_by_other', 'Saline', 'Heparin', 'ml_1','management_of_infusion_patient','management_of_infusion_caregiver',
                        'management_of_infusion_demonstrates', 'management_of_infusion_verbalizes_proper', 'Comments', 'angry', 'agitated','fearful','sad',
                        'discourage','lonely','depressed', 'helpless', 'forgetfull', 'confused', 'content','happy','hopeful','motivated', 'status_other', 'turgor',
                        'turgor_color', 'turgor_temp', 'itch','rash','try', 'scaling', 'redness', 'ecchymosis', 'pallor','jaundice','turgor_other',
                        'soiled_dressing_removed', 'soiled_dressing_properly', 'wound_cleaned', 'wound_irrigated', 'wound_dressingtype', 'Drainage_emptied',
                        'vacuum_reset','tolerated','Medicated_woundcare', 'dressing_performed_by_patient', 'dressing_performed_by_nurse', 'dressing_performed_by_caregiver',
                        'dressing_performed_by_caregiver_other','Woundcare_patient','Woundcare_caregiver','soiled-disposal', 'symptoms_report_to', 'woundcare_performpatient',
                       'woundcare_performcaregiver', 'dressing_changeby_caregiver',
                        'Skilled_observation_assessment','Skilled_observation_assessment_care','Skilled_observation_assessment_change', 'Skilled_observation_assessment_urine_testing',
                        'Skilled_observation_assessment_wound_care', 'Skilled_observation_assessment_wound_dressing', 'Observe signs_symptoms_of_infection','venipucture','painmanagement',
                        'Bowel_Bladder_training', 'digital_removal_Enema', 'change', 'injection', 'administer_medication', 'Insulin_prep','Insulin_administer','Diabetic_assessment',
                        'Teach_diabetic_care', 'Teach_administer', 'Teach_ivs','Ostomy_care', 'conduit_care','Teach_care','Administer_tracheostomy','Administer_treatment',
                        'Teach_care_terminally_ill', 'Observe_and_assess_medication', 'Teach_medication_purpose','Teach_medication_side_effect','Teach_medication_administration',
                        'Evaluate_diet','Evaluate_fluid_intake', 'Diet_teaching', 'Assess_ADLs_Functionality', 'Teach_Safety_precautions', 'Teach_skin_care_pressure_injury',
                        'Psychological_intervention','Chest_physiotherapy_postural_drainage','Prenatal_assessment', 'Post_partum_assessment', 'Teach_infant_child_care', 
                        'child_care_other', 'lab_work_blood_drawn', 'lab_work_blood_drawn_for','lab_work_blood_drawn_other','lab_work_blood_drawn_delivered',
                        'Instructions_Patient_Response', 'Care_plan_reviewed', 'Care_patient_involvement', 'Care_plan_outcome_achieved','Care_plan_prn_order_obtained','Plan_for_next_visit',
                        'next_physician_visit', 'approximate_next_visit_date', 'DischargePlanning', 'discharge_plan_verified', 'BillableSuppliesRecorded',
                        'physician_pt','physician_ot','physician_st', 'physician_sw', 'physician_other', 'aide', 'aide_supervisory_visit_present','supervisory_visit_scheduled',
                        'PatientSatisfied','Explain', 'AideCarePlan', 'AideCarePlanUpdated', 'Observation_of', 'Teaching_training_of',
                        'Nurse_signature_title','Nurse_signature_date','Patient_signature',
                       ];
    
}
