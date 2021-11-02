<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicesdetails', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('services_id')->index()->unsigned();
            $table->text('description');
            $table->string('image', 100)->nullable();
            $table->text('link')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('servicesdetails');
    }
}
