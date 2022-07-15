<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Str::random(5),
            'date_of_birth' => date('Y-m-d', strtotime( '+'.mt_rand(0,30).' days')),
            'gender' => 'Male',
            'annual_income' => rand(10000, 99999),
            'occupation' => 'Private job',
            'family_type' => 'Joint family',
            'manglik' => 'Yes',
            'expected_income' => rand(10000, 20000).'-'.rand(10000, 99999),
            'expected_occupation' => 'Private job',
            'expected_family_type' => 'Joint family',
            'expected_manglik' => 'No',
            'login_type' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('users')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Str::random(5),
            'date_of_birth' => date('Y-m-d', strtotime( '+'.mt_rand(0,30).' days')),
            'gender' => 'Male',
            'annual_income' => rand(10000, 99999),
            'occupation' => 'Government job',
            'family_type' => 'Joint family',
            'manglik' => 'Yes',
            'expected_income' => rand(10000, 20000).'-'.rand(10000, 99999),
            'login_type' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('users')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Str::random(5),
            'date_of_birth' => date('Y-m-d', strtotime( '+'.mt_rand(0,30).' days')),
            'gender' => 'Male',
            'annual_income' => rand(10000, 99999),
            'occupation' => 'Business',
            'family_type' => 'Joint family',
            'manglik' => 'No',
            'expected_income' => rand(10000, 20000).'-'.rand(10000, 99999),
            'login_type' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('users')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Str::random(5),
            'date_of_birth' => date('Y-m-d', strtotime( '+'.mt_rand(0,30).' days')),
            'gender' => 'Male',
            'annual_income' => rand(10000, 99999),
            'occupation' => 'Business',
            'family_type' => 'Nuclear family',
            'manglik' => 'No',
            'expected_income' => rand(10000, 20000).'-'.rand(10000, 99999),
            'login_type' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('users')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Str::random(5),
            'date_of_birth' => date('Y-m-d', strtotime( '+'.mt_rand(0,30).' days')),
            'gender' => 'Female',
            'annual_income' => rand(10000, 99999),
            'occupation' => 'Private job',
            'family_type' => 'Joint family',
            'manglik' => 'Yes',
            'expected_income' => rand(10000, 20000).'-'.rand(10000, 99999),
            'expected_occupation' => 'Private job',
            'expected_family_type' => 'Joint family',
            'expected_manglik' => 'No',
            'login_type' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('users')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Str::random(5),
            'date_of_birth' => date('Y-m-d', strtotime( '+'.mt_rand(0,30).' days')),
            'gender' => 'Female',
            'annual_income' => rand(10000, 99999),
            'occupation' => 'Government job',
            'family_type' => 'Joint family',
            'manglik' => 'Yes',
            'expected_income' => rand(10000, 20000).'-'.rand(10000, 99999),
            'login_type' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('users')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Str::random(5),
            'date_of_birth' => date('Y-m-d', strtotime( '+'.mt_rand(0,30).' days')),
            'gender' => 'Female',
            'annual_income' => rand(10000, 99999),
            'occupation' => 'Business',
            'family_type' => 'Joint family',
            'manglik' => 'No',
            'expected_income' => rand(10000, 20000).'-'.rand(10000, 99999),
            'login_type' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('users')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Str::random(5),
            'date_of_birth' => date('Y-m-d', strtotime( '+'.mt_rand(0,30).' days')),
            'gender' => 'Female',
            'annual_income' => rand(10000, 99999),
            'occupation' => 'Business',
            'family_type' => 'Nuclear family',
            'manglik' => 'No',
            'expected_income' => rand(10000, 20000).'-'.rand(10000, 99999),
            'login_type' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
