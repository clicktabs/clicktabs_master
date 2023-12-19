<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MUIformRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'ProviderNameAddress' => 'nullable|string|max:255',
            'IndividualsName' => 'nullable|string|max:255',
            'dob' => 'nullable|date',
            'Address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'DateofIncident' => 'nullable|date',
            'TimeofIncident' => 'nullable|date_format:H:i',
            'ampm' => 'nullable|in:AM,PM',
            'LocationofIncident' => 'nullable|string',
            'DescriptionofIncident' => 'nullable|string',
            'InjuryDescribe' => 'nullable|string',
            'ImmediateAction' => 'nullable|string',
            'NameofPPI' => 'nullable|string|max:255',
            'RelationshiptoIndividual' => 'nullable|string|max:255',
            'Witnesses' => 'nullable|string|max:255',
            'OthersInvolved' => 'nullable|string|max:255',
            'NameTitle' => 'nullable|string|max:255',
            'DateTime' => 'nullable|date',
            'ssa' => 'nullable|string|max:255',
            'DateTime_1' => 'nullable|date',
            'CertifiedProvider' => 'nullable|string|max:255',
            'DateTime_2' => 'nullable|date',
            'StafforFamily' => 'nullable|string|max:255',
            'DateTime_3' => 'nullable|date',
            'NameBadgeNumber' => 'nullable|string|max:255',
            'DateTime_4' => 'nullable|date',
            'ChildrenServices' => 'nullable|string|max:255',
            'DateTime_5' => 'nullable|date',
            'CountyBoard' => 'nullable|string|max:255',
            'DateTime_6' => 'nullable|date',
            'Administrator' => 'nullable|string|max:255',
            'DateTime_7' => 'nullable|date',
            'SeniorManagement' => 'nullable|string|max:255',
            'DateTime_8' => 'nullable|date',
            'OtherProvidersofService' => 'nullable|string|max:255',
            'DateTime_9' => 'nullable|date',
            'FurtherMedicalFollow-up' => 'nullable|string',
            'AdministrativeAction' => 'nullable|string',
            'PrintedName' => 'nullable|string|max:255',
            'Signature' => 'nullable|string|max:255',
            'Title' => 'nullable|string|max:255',
            'Date' => 'nullable|date',
            'HeadFace' => 'nullable|string|max:255',
            'MouthTeeth' => 'nullable|string|max:255',
            'HandsArms' => 'nullable|string|max:255',
            'FeetLegs' => 'nullable|string|max:255',
            'NeckChest' => 'nullable|string|max:255',
            'Abdomen' => 'nullable|string|max:255',
            'BackButtocks' => 'nullable|string|max:255',
            'Genitals' => 'nullable|string|max:255',
            'Detaileddescription' => 'nullable|string',
            'ContributingFactors' => 'nullable|string',
            'Preventivemeasures' => 'nullable|string',
            'AdministratorReview' => 'nullable|string|max:255',
            'Dated' => 'nullable|date',
        ];
    }
}
