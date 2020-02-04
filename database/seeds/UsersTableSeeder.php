<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //modelo mas metodo create()
        User::create([
            'name' => 'jaiko',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);
    }
}
