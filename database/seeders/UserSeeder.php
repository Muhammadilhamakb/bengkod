<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =[
            [
                'name' => 'ilham',
                'alamat' => 'demak',
                'no_hp' => '08123456789',
                'role' => 'dokter',
                'email' => 'ilham@gmail.com',
                'password'=>'password',
            ],
            [
                'name' => 'akbar',
                'alamat' => 'demak',
                'no_hp' => '081234875789',
                'role' => 'pasien',
                'email' => 'akbar@gmail.com',
                'password'=>'password',
            ]
        ];
        foreach($data as $d){
            User::create
                ([
                'name' => $d['name'],
                'alamat' => $d['alamat'],
                'no_hp' => $d['no_hp'],
                'role' => $d['role'],
                'email' => $d['email'],
                'password' => $d['password'],
            ]);
        }
    }
}
