<?php

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
