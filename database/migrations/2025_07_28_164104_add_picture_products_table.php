<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //como se trata de uma amigration para inserie um campo em uma tabela 
        //o sistema não coloca os campos pre-definidos no caso o usuario e quam deve avisar os campos que ele deseja 
        
        Schema::table('products',function(Blueprint $table){

           //aqui eu declaro o campo que quero adicionar 
           //aqui eu informo que o campo picture será adicionado depois do campo description 
           // nesse caso eu posso , tanto adicionar  quanto definir em que posição da tabela o campo vai ficar
             
           $table->string('picture',200)->nullable()->after('description');


        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
