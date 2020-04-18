<?php

use Illuminate\Database\Seeder;

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
            'name' => Str::Rahman,
            'email' => Str::admin.'@admin.com',
            'password' => Hash::make('password'),
            'role' => Str::Admin
        ]);
    }
}
