<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatureCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longtext('description');
            $table->string('adress');
            $table->string('education');
           //niveau 
            $table->integer('level');
            //leerjaar
            $table->integer('grade');
            //web of applicatie kant
            $table->string('kind_of');
            $table->string('image')->nullable();
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('companies');
    }
}
