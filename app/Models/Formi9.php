<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class formi9 extends Model
{
    use SoftDeletes;

    protected $guarded = [];
    protected $fillable = ['formi9_lName', 'formi9_fName', 'formi9_mName','formi9_oLastName','formi9_address',
                            'formi9_aptNumber','formi9_city','formi9_state','formi9_zip','formi9_dob','formi9_ssn',
                            'formi9_email','formi9_employeePhone','formi9_ctizen','formi9_permtDate','formi9_lawful',
                            'formi9_lawful_1','formi9_alien','formi9_alien_1','formi9_alienNumber','formi9_admissionNo',
                            'formi9_PassportNo','formi9_cuntry','formi9_signature_1','formi9_signatur_2','formi9_translator',
                            'formi9_preparer','formi9_signature_3','formi9_signature_4','formi9_LName_1','formi9_FName_1',
                            'formi9_Address_1','formi9_City_1','formi9_State_1','formi9_Zip_1','formi9_employor_auth',
                            'formi9_employorLname','formi9_employorFname','formi9_employorMI','formi9_citizenship','formi9_docTitle1',
                            'formi9_docTitle2','formi9_docTitle3','formi9_issuing_1','formi9_issuing_2','formi9_issuing_3',
                            'formi9_docNumber_1','formi9_docNumber_2','formi9_docNumber_3','formi9_expir_1','formi9_expir_2',
                            'formi9_expir_3','formi9_docTitle1_4','formi9_additional','formi9_Issuing_4','formi9_docNumber_4',
                            'formi9_expir_4','formi9_docTitle_5','formi9_issuin_5','formi9_docNumber_5','formi9_expir_5',
                            'formi9_firstDay','formi9_Employer_authLnam','formi9_Employer_authFnam','formi9_employerOrg',
                            'formi9_oemployerorgAddress','formi9_employercity','formi9_employororgState',
                            'formi9_employororgZip','formi9_LName_3','formi9_FName_3','formi9_MName_3','formi9_Date','formi9_DocumentTitle_5',
                            'formi9_DocumentNumber','formi9_expir_6','formi9-signature_5','formi9_Authorized_4'
                          ];


}