<?php

use Dba\Connection;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


//rota para testar a conexão com mysql 

Route::get('/mysql',function(){
     //Ele vai tentar se conectar 

     try{

         //sele ele conseguir ele vai mostrar o nome da base de dados na tela 
         DB::connection()->getPdo();
         echo"Conexão com a base de dados: ".DB::connection()->getDatabaseName();
       
     }catch(\Exception $e){

        // se ele não conseguir ele vai mostrar uma mensagem de erro 

         die("Não foi possivel se conectar com a base de dados : ".$e->getMessage());
     }

});

Route::get('/sqllite',function(){

    //Ele vai tentar se conectar 

     try{

         //sele ele conseguir ele vai mostrar o nome da base de dados na tela 
         DB::connection()->getPdo();
         echo"Conexão com a base de dados: ".DB::connection()->getDatabaseName();
       
     }catch(\Exception $e){

        // se ele não conseguir ele vai mostrar uma mensagem de erro 

         die("Não foi possivel se conectar com a base de dados : ".$e->getMessage());
     }

});



Route::get('/sqlserver',function(){

    //Ele vai tentar se conectar 

     try{

         //sele ele conseguir ele vai mostrar o nome da base de dados na tela 
         DB::connection()->getPdo();
         echo"Conexão com a base de dados: ".DB::connection()->getDatabaseName();
       
     }catch(\Exception $e){

        // se ele não conseguir ele vai mostrar uma mensagem de erro 

         die("Não foi possivel se conectar com a base de dados : ".$e->getMessage());
     }

});

Route::get('/mysql_test_two_databases',function(){

    try{
        //conectando na primeira
        DB::connection('mysql_users')->getPdo();
        echo'Sucesso banco 1 :'.DB::connection('mysql_users')->getDatabaseName();
        echo'<br>';
        
        //conetando a segunda 

         DB::connection('mysql_app')->getPdo();
        echo'Sucesso banco 2 :'.DB::connection('mysql_app')->getDatabaseName();
        echo'<br>';


    }catch(\Exception $e){

         die('Erro:'.$e->getMessage());
    }
});

Route::get('/dynamic_connection',function(){

    try{

        Config::set('database.connections.mysql',[
    'driver' => 'mysql',
    'url' => '',
    'host' => '127.0.0.1',
    'port' => '3306',
    'database' => 'laravel_mysql_app',
    'username' => 'root',
    'password' => '',
    'unix_socket' => env('DB_SOCKET', ''),
    'charset' => env('DB_CHARSET', 'utf8mb4'),
    'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
     'prefix' => '',
     'prefix_indexes' => true,
     'strict' => true,
     'engine' => null,
        'options' => extension_loaded('pdo_mysql') ? array_filter([
         PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
       ]) : [],
   ]);

        DB::connection('mysql')->getPdo();
        echo'ligação ok';
        


    }catch(\Exception $e){

         die('Erro:'.$e->getMessage());
    }
});





