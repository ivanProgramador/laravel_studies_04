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
     //executando varias seeders ao mesmo tempo 

       $this->call([

         UsersTableSeeder1::class,
         UsersTableSeeder2::class,
         UsersTableSeeder3::class

       ]);
        
    }
   }
    

