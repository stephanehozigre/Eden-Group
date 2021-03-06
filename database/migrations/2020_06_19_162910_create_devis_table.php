<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numero');
            $table->integer('demande_id')->unsigned();
            $table->foreign('demande_id')
                ->references('id')
                ->on('demande')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->string('description');
            $table->boolean('vu');
            $table->boolean('statut')->default(1);
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
        Schema::table('devis', function(Blueprint $table){
            $table->dropForeign('devis_demande_id_foreing');
        });
        Schema::dropIfExists('devis');
    }
}
