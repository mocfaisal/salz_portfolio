<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EduSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data ke table m_edu

        DB::table('m_edu')->insert([

                `edu_type_id` => '',
                `edu_name` => '',
                `edu_year` => '',
                `edu_details` => '',
                `created_at` => '',
                `updated_at` => '',

        ]);
    }
}
