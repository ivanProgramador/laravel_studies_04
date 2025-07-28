<?php


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <- Aqui está a importação que faltava
use Illuminate\Support\Facades\Hash; // Opcional, se quiser usar Hash::make()
use Illuminate\Support\Str;

class UsersTableSeeder1 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('users')->insert([
                      'username' => 'user1',
                        'password' => bcrypt('senha'), // ou Hash::make('senha')
                        'active' => true,
                        
          ]);
    }
}
