<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToppingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toppings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('volunteer_id')->unsigned();
            $table->bigInteger('institution_id')->unsigned();
            $table->bigInteger('project_id')->unsigned();
            $table->integer('cob_mean');
            $table->integer('cob_woman');
            $table->integer('total_people');
            $table->timestamps();

            //relations
            $table->foreign('volunteer_id')->references('id')->on('volunteers')
                ->onDelete('restrict')
                ->onDelete('restrict');
            $table->foreign('institution_id')->references('id')->on('institutions')
                ->onDelete('restrict')
                ->onDelete('restrict');
            $table->foreign('project_id')->references('id')->on('projects')
                ->onDelete('restrict')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toppings');
    }
}
