<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLowVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('low_volunteers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('key',50)->unique();
            $table->string('name', 50);
            $table->string('last_name', 50 );
            $table->string('second_name', 50);
            $table->string('description',50);
            $table->string('start_date',50);
            $table->string('end_date',50);
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
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
        Schema::dropIfExists('low_volunteers');
    }
}
