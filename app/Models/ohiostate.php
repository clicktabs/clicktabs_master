<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ohiostate extends Model
{
    protected $table = 'ohiostates';
    protected $fillable = ['Last Name', 'First Name','Middle Initial','Other Last Names Used','Address','Apt_Number','City or Town',
                           'State','ZIP Code','Date of Birth','U.S. Social Security Number'.'Employees E-mail'.'Employees Telephone Number',
                           'A citizen of the United States','A noncitizen national of the United States','A lawful permanent resident',
                           'An alien authorized to work until','Alien Registration Number/USCIS Number','Form 1-94 Admission Number',
                           'Foreign Passport Number','Country of Issurance','preparer','translator','Preparer Last Name','Preparer First Name','M.I.',
                           'Citizenship/immigration Status','Document Title_1','Document Title_2','Document Title_3','IssuinFirst_Nameg Authority',
                           'Issuing Authority','Issuing Authority','Document Number','Document Number','Document Number','Expiration Date',
                           'Expiration Date','Expiration Date','Document Title','Additional Information','Issuing Authority','Document Number',
                           'Expiration Date','Document Title','Issuing Authority','Document Number','Expiration Date','employees first day of employment',
                           'Title of Employer',' Last Name of Employer','First Name of Employer','Employers Business or Organization Name',
                           'Employers Business or Organization Address','City or Town','State','ZIP Code','Reverification and Rehires','Last_Name_of_Employer',
                           'First Name_Employer','Middle Initial','Date','Document Title','Document Number','Title of Employer or Authorized Representative'
                          ];
}
