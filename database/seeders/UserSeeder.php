<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name'=>'Mehmet Yoldakalan',
            'email'=>'mnyoldakalan@gmail.com',
            'phone'=>'05414858400',
            'company'=>'Symfonysoft',
            'country'=>'Turkey',
            'city'=>'İstanbul',
            'address'=>'Üsküdar',
            'password'=>Hash::make('admin123'),
            'permission'=>'customer'
        ]);
    }
}
