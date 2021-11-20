<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosPhotosgroupingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos_photosgroupings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('photos_id')->index()->unsigned();
            $table->bigInteger('photosgroupings_id')->index()->unsigned();
            $table->timestamps();

            $table->foreign('photos_id')->references('id')->on('photos');
            $table->foreign('photosgroupings_id')->references('id')->on('photosgroupings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos_photosgroupings');
    }
}
