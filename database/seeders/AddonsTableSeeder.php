<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AddonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addons')->insert([
            ['id' => 1, 'name' => 'Document Type', 'status' => 1, 'user_id' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 2, 'name' => 'Billing Code', 'status' => 1, 'user_id' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 3, 'name' => 'Service Code', 'status' => 1, 'user_id' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 4, 'name' => 'Employment Type', 'status' => 1, 'user_id' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 5, 'name' => 'Agency Branch', 'status' => 1, 'user_id' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 6, 'name' => 'Credentials', 'status' => 1, 'user_id' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 7, 'name' => 'Job Title', 'status' => 1, 'user_id' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 8, 'name' => 'Insurance Type', 'status' => 1, 'user_id' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 9, 'name' => 'Pay Type', 'status' => 1, 'user_id' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 10, 'name' => 'Payors', 'status' => 1, 'user_id' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 11, 'name' => 'New Goals', 'status' => 1, 'user_id' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 12, 'name' => 'New Interventions', 'status' => 1, 'user_id' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 13, 'name' => 'Restriction Code', 'status' => 1, 'user_id' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 14, 'name' => 'Severity', 'status' => 1, 'user_id' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 15, 'name' => 'Document Name', 'status' => 1, 'user_id' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 16, 'name' => 'Matching Code', 'status' => 1, 'user_id' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 17, 'name' => 'Compatibility Code', 'status' => 1, 'user_id' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 18, 'name' => 'Tasks', 'status' => 1, 'user_id' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
