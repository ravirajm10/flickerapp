<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Flicker',
            'last_name' => 'Admin',
            'email' => 'admin@flickeradmin.com',
            'password' => bcrypt('admin@flickeradmin')
        ]);
    }
}
