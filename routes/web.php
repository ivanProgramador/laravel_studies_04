<?php

use Dba\Connection;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get('/mysql',function(){
     //Ele vai tentar se conectar 

     try{

         DB::connection()->getPdo();
         echo"Conexão com a base de dados: ".DB::connection()->getDatabaseName();
       
     }catch(\Exception $e){

         die("Não foi possivel se conectar com a base de dados : ".$e->getMessage());
     }

});






