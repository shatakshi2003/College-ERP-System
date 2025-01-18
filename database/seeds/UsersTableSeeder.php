<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Super Admin',
            'email' => 'softtechcareersolution@gmail.com',
            'password' => bcrypt('superadmin'),
            'status' => 1
        ]);
    }
}
