<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <- Aqui está a importação que faltava
use Illuminate\Support\Facades\Hash; // Opcional, se quiser usar Hash::make()
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    

  

   public function run(): void
    {

       // 1 - forma de gravar um seed na base de dados   
          //           DB::table('users')->insert([
         //               'username' => 'user1',
         //               'password' => bcrypt('senha'), // ou Hash::make('senha')
         //               'active' => true,
         //               ''
         //           ]);


         //2 - forma de gravar seeders na base de dados
         
        //   $users = [

        //    [
        //        'username' =>'user2',
        //        'password'=> bcrypt('senha'),
        //        'active' => true  
        //    ],
        //     [
        //       'username' =>'user3',
        //        'password'=> bcrypt('senha'),
        //        'active' => true  
        //     ],
        //      [
        //        'username' =>'user5',
        //        'password'=> bcrypt('senha'),
        //        'active' => true  
         //     ],
        //       [
        //        'username' =>'user6',
        //        'password'=> bcrypt('senha'),
        //        'active' => false  
        //       ],
        //        [
        //        'username' =>'user7',
        //        'password'=> bcrypt('senha'),
        //        'active' => true  
        //        ],
        //         [
        //        'username' =>'user8',
        //        'password'=> bcrypt('senha'),
        //        'active' => false
        //    ]

        // ];
        
        // 3 forma de gravar varios dados rendomicos na abase de dados
        
        $users = [];

        for($index =0;$index < 10; $index ++){

            $users[]=[
                'username' => Str::random(10),
                'password' => bcrypt('senha'),
                'active' => (bool) rand(0,1)
            ];
        }
        DB::table('users')->insert($users);




        
    }

   
   
    
   
    
  }
    

