<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchhoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branchhours', function (Blueprint $table) {
            $table->id();
            $table->text('time', 200);
            $table->boolean('status');
            $table->integer('order');
            $table->bigInteger('branches_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('branches_id')->references('id')->on('branches');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branchhours');
    }
}
