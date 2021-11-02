<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicecentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicecenters', function (Blueprint $table) {
            $table->id();
            $table->string('town', 200);
            $table->string('branch', 200);
            $table->string('phone', 200);
            $table->integer('order');
            $table->boolean('status')->default(true);
            $table->text('map')->nullable();
            $table->string('email', 200)->nullable();
            $table->text('description')->nullable();
            $table->text('address')->nullable();
            $table->bigInteger('categories_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('categories_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicecenters');
    }
}
