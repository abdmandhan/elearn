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
        $data = [
            'name'      => 'Abdurrahman Ramadhan',
            'email'     => 'abdmandhan@gmail.com',
            'password'  => Hash::make('12341234')
        ];
        User::create($data);

        User::factory()->times(10)->create();
    }
}
