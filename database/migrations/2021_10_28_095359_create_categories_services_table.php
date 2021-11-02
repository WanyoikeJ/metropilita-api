<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_services', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('categories_id')->index()->unsigned();
            $table->bigInteger('services_id')->index()->unsigned();
            $table->timestamps();

            $table->foreign('categories_id')->references('id')->on('categories');
            $table->foreign('services_id')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories_services');
    }
}
