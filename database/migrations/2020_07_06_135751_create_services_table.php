<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('libelle');
            $table->text('description');
            $table->boolean('validate')->default(0);
            $table->integer('domaine_id')->unsigned();
            $table->foreign('domaine_id')
                ->references('id')
                ->on('domaines')
                ->onDelete('restrict')
                ->onUpdate('restrict');
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
         Schema::table('services', function(Blueprint $table){
            $table->dropForeign('services_domaine_id_foreing');
        });
        Schema::dropIfExists('services');
    }
}
