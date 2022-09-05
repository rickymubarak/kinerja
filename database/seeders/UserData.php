<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Administrator',
                'nip' => 'ricky',
                'email' => 'erkbkpsdm3@gmail.com',
                'password' => bcrypt('123456'),
                'level' => 1,
            ],
            [
                'name' => 'AdminPD',
                'nip' => '197202121996031003',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'level' => 1,
            ],
            [
                'name' => 'Pegawai',
                'nip' => '198601222004122001',
                'email' => 'pegawai@gmail.com',
                'password' => bcrypt('123456'),
                'level' => 1,
            ],
        ];

        foreach($user as $key => $value){
            User::created($value);
        }
    }
}
