<?php


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <- Aqui está a importação que faltava
use Illuminate\Support\Facades\Hash; // Opcional, se quiser usar Hash::make()
use Illuminate\Support\Str;

class UsersTableSeeder3 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
