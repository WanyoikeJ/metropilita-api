<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('town', 200);
            $table->string('branch', 200);
            $table->text('map');
            $table->integer('order');
            $table->boolean('status')->default(true);
            $table->string('email', 200)->nullable();
            $table->text('description')->nullable();
            $table->text('address')->nullable();
            $table->text('fax', 200)->nullable();
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
        Schema::dropIfExists('branches');
    }
}
