<?php

use Illuminate\Database\Seeder;

class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'dept_name' => ('Faculty'),
        ]);

        DB::table('departments')->insert([
            'dept_name' => ('Admin'),
        ]);

        DB::table('departments')->insert([
            'dept_name' => ('HR'),
        ]);

        DB::table('departments')->insert([
            'dept_name' => ('Accounts'),
        ]);

        DB::table('departments')->insert([
            'dept_name' => ('Examination'),
        ]);

        DB::table('departments')->insert([
            'dept_name' => ('Admission'),
        ]);

        // DB::table('departments')->insert([
        //     'dept_name' => ('Accounts'),
        // ]);

        // ROLEES

        DB::table('roles')->insert([
            'name' => ('Teacher'),
        ]);
        DB::table('roles')->insert([
            'name' => ('Admin'),
        ]);
        DB::table('roles')->insert([
            'name' => ('HR'),
        ]);
        DB::table('roles')->insert([
            'name' => ('Accounts'),
        ]);
        DB::table('roles')->insert([
            'name' => ('Studuent'),
        ]);
        DB::table('roles')->insert([
            'name' => ('Parent'),
        ]);

        DB::table('roles')->insert([
            'name' => ('Examination'),
        ]);

        DB::table('roles')->insert([
            'name' => ('Admission'),
        ]);

        // DB::table('roles')->insert([
        //     'name' => ('Parent'),
        // ]);

        // DB::table('roles')->insert([
        //     'name' => ('Parent'),
        // ]);
    }
}
