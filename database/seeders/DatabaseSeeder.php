<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Employee::create([
            'name' => 'Sakib Al Hasan',
            'email' => 'sakib@gmail.com',
            'job_title' => 'senior chef',
            'salary' => 100000
        ]);
        Employee::create([
            'name' => 'Tamim Iqbal',
            'email' => 'tamim@gmail.com',
            'job_title' => 'senior chef',
            'salary' => 80000
        ]);
        Employee::create([
            'name' => 'Mushfiqur Rahim',
            'email' => 'mushi@gmail.com',
            'job_title' => 'senior chef',
            'salary' => 100000
        ]);
        Employee::create([
            'name' => 'Nasum Ahmed',
            'email' => 'nasum@gmail.com',
            'job_title' => 'junior chef',
            'salary' => 50000
        ]);
        Employee::create([
            'name' => 'Mehedy Hasan Miraz',
            'email' => 'mehedy@gmail.com',
            'job_title' => 'Accoundant',
            'salary' => 120000
        ]);
        Employee::create([
            'name' => 'Lord Rabbi',
            'email' => 'rabbi@gmail.com',
            'job_title' => 'cleaning stuff',
            'salary' => 20000
        ]);
        
    }
}
