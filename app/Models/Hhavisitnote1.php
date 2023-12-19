<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class hhavisitnote1 extends Model
{
    // protected $fillable = [
    //     'date_1', 'time_in', 'date_2', 'time_out', 'vitals_results', 'vitals_P', 'refused_1',
    //     'comments_1', 'vitals_R', 'vitals_B_P', 'comments_2', 'refused_2', 'vitals_weight', 'vitals_pain_rating',
    //     'refused_3', 'comments_3', 'bath', 'comments_4', 'bed_bath', 'refused_4', 'comments_5', 'refused_5',
    //     'assis_bath_chair_1', 'assis_bath_chair_2', 'assis_bath_chair_3', 'other_specify', 'comments_6', 'assist_bath_chair',
    //     'assist_bath_chair_1', 'comments_7', 'assist_with_dressing', 'assist_with_dressing_1', 'comments_8', 'hair_care',
    //     'hair_care_1', 'comments_9', 'shampoo', 'shampoo_1', 'comments_11', 'skin_care', 'skin_care_1', 'comments_12',
    //     'moisturizer', 'moisturizer_1', 'comments_14', 'check_pressure_areas', 'check_pressure_areas_1', 'comments_15',
    //     'nail_care', 'nail_care_1', 'comments_16', 'oral_care', 'oral_care_1', 'comments_17', 'clean_dentures', 'clean_dentures_1',
    //     'shave', 'shave_1', 'comments_19','other', 'comments_20', 'perineal_care', 'comments_21', 'assist_with_elimination',
    //     'assist_with_elimination_1', 'comments_22', 'catheter_care', 'catheter_care_1', 'comments_23', 'ostomy_care', 'ostomy_care_1',
    //     'comments_24', 'Intake', 'Output', 'comments_25', 'inspect_reinforce_dressing', 'comments_26', 'refuse_7', 'medication_reminders',
    //     'comments_27', 'refuse_8', 'medication_assistance', 'comments_28', 'refuse_9', 'other_303', 'comments_29', 'ambulation', 'w_c',
    //     'walker', 'cane', 'refuse_11', 'gait_belt', 'chair', 'bed', 'dangle','commod', 'shower', 'tub','comments_31', 'ROM', 'Arm', 'Leg',
    //     'comments_32', 'reposition', 'encourange_reposition', 'every', 'comments_33', 'exercise_pt', 'exercise_ot', 'exercise_slp', 'refused_17',
    //     'comments_35', 'other_408','refused_18', 'comments_36', 'meal_preparation', 'refused_19', 'comments_37', 'assist_feeding', 'refused_20',
    //     'comments_38', 'radio_1', 'refused_21', 'comments_39', 'grocery_shopping', 'refused_22', 'comments_40', 'comments_40', 'refused_23',
    //     'comments_41', 'other_100','refused_24', 'comments_42', 'bedroom', 'bathroom', 'kitchen', 'change_bed_linen', 'refused_25', 'comments_43',
    //     'equipment_care', 'refused_26', 'comments_44', 'other_50', 'comments_45', 'CommentsNotes', 'sn', 'therapy', 'ot', 'slp',
    //     'family', 'patient', 'date', 'patientsign', 'patient_date'
    // ];
    protected $table = 'hhavisitnote1s';
    protected $guarded = [];

}
