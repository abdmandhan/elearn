<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            'name'      => 'Teacher Abdurrahman',
            'full_name' => 'Abdurrahman Ramadhan',
            'email'     => 'abdmandhan@gmail.com',
            'password'  => Hash::make('12341234')
        ];
        Teacher::create($data);

        Teacher::factory()->times(10)->create();
    }
}
