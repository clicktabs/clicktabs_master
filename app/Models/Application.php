<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Application extends Model
{
    protected $fillable = ['appl_position','appl_lastName','appl_firstName','appl_middleName','appl_address',
                        'application_addres','appl_city','appl_state','appl_zip','appl_cellphone','appl_email',
                        'app_workstartdate','appl_salarydesire','appl_Dipolma','appl_Hours','app_workingdays',
                        'app_postion','appl_Status','appl_Workauthorization','appl_conviction','appl_jobFunctions',
                        'appl_jobEssential','appl_school_name','appl_school_degree','appl_school_address','appl_school_1',
                        'appl_school_2','appl_school_3','appl_other_1','appl_other_2','appl_other_3','appl_Example6',
                        'appl_proName','appl_proAddress','appl_proPhone','appl_proRelationship','appl_proName1',
                        'appl_proAddress1','appl_proPhone1','appl_proRelationship1','appl_proName2','appl_proAddress2',
                        'appl_proPhone2','appl_proRelationship2','appl_contact','appl_Job','appl_startDate','appl_endDate',
                        'appl_companyName','appl_supervisorsName','appl_supervisorsNumber','appl_employorCity','appl_employorState',
                        'appl_employorZip','appl_duties','appl_reasonforleaving','appl_startingSalary','appl_endinfSalary','appl_Job1',
                        'appl_startDate1','appl_endDate1','appl_companyName1','appl_supervisorsName1','appl_supervisorPhone','appl_City1',
                        'appl_State1','appl_Zip1','appl_duties1','appl_reasonforleaving1','appl_Startingsalary1','appl_endingSalary1', 'app-signature_10'
                       ];
}

