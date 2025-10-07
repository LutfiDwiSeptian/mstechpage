<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Validation\Rules\Email;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
            'name' => 'Admin',
            'password' => bcrypt('oU17#n7<%bRE'),
            'email' => 'mstechmail@mstech.com'


        ]);
    }
}
