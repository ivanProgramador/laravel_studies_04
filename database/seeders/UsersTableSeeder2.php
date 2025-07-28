<?php


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <- Aqui está a importação que faltava
use Illuminate\Support\Facades\Hash; // Opcional, se quiser usar Hash::make()
use Illuminate\Support\Str;

class UsersTableSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                 
           $users = [

            [
                'username' =>'user2',
                'password'=> bcrypt('senha'),
                'active' => true  
            ],
             [
               'username' =>'user3',
                'password'=> bcrypt('senha'),
                'active' => true  
             ],
              [
                'username' =>'user5',
                'password'=> bcrypt('senha'),
                'active' => true  
             ],
               [
                'username' =>'user6',
                'password'=> bcrypt('senha'),
                'active' => false  
              ],
                [
                'username' =>'user7',
                'password'=> bcrypt('senha'),
                'active' => true  
                ],
                 [
                'username' =>'user8',
                'password'=> bcrypt('senha'),
                'active' => false
            ]

        ];

        
        DB::table('users')->insert($users);
    }
}
