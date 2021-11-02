<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('slug')->unique();
            $table->boolean('status')->default(true);
            $table->boolean('childstatus')->default(true);
            $table->integer('order')->nullable();
            $table->integer('parent_id')->unsigned()->index()->nullable();
            $table->text('banner')->nullable();
            $table->text('description')->nullable();
            $table->text('meta')->nullable();
            $table->text('title')->nullable();
            $table->text('h1')->nullable();
            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
