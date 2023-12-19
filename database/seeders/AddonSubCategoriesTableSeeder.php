<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AddonSubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addonSubCategories = [
            ['code' => '_Oasis-E-Death', 'name' => 'Oasis-E-Death(Non-Billable)'],
            ['code' => '_Oasis-E-Recertification', 'name' => 'Oasis-E-Recertification(Billable)'],
            ['code' => '_Oasis-E-Transfer', 'name' => 'Oasis-E-Transfer(Non-Billable)'],
            ['code' => '_OASIS-E-Start of Care', 'name' => 'OASIS-E Start of Care'],
            ['code' => '_Skilled Nurse Visit', 'name' => 'Skilled Nurse Visit (Billable)'],
            ['code' => '_HHA Supervisory Visit', 'name' => 'HHA Supervisory Visit(Non-Billable)'],
            ['code' => '_LVN/LPN Visit', 'name' => 'LVN/LPN Visit (Billable)'],
            ['code' => '_Pediatric Skilled Nursing', 'name' => 'Pediatric Skilled Nursing'],
            ['code' => '_Skilled Nurse Visit AM', 'name' => 'Skilled Nurse Visit AM (Billable)'],
            ['code' => '_Skilled Nurse Visit PM', 'name' => 'Skilled Nurse Visit PM (Billable)'],
            ['code' => '_Skilled Nurse Evaluation', 'name' => 'Skilled Nurse Evaluation'],
            ['code' => '_SN Injection', 'name' => 'SN Injection'],
            ['code' => '_SN Foley Change', 'name' => 'SN Foley Change'],
            ['code' => '_SNV W/ Discharge Summary', 'name' => 'SNV W/ Discharge Summary'],
            ['code' => '_DSP', 'name' => 'DSP (Billable)'],
            ['code' => '_HHA Visit', 'name' => 'HHA Visit (Billable)'],
        ];

        foreach ($addonSubCategories as $index => $category) {
            DB::table('addon_sub_categories')->insert([
                'id' => $index + 1,
                'code' => $category['code'],
                'name' => $category['name'],
                'user_id' => '1', // Assuming all are created by user with ID 1
                'status' => 1, // Assuming the status for all is active
                'description' => $category['name'], // Description is same as the name for simplicity
                'addon_id' => 18, // Assuming all belong to the addon with ID 18
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'organization_id' => null, // Assuming the organization_id is NULL for all
            ]);
        }
    }
}
