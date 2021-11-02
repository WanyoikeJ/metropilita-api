<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqdetails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('faqs_id')->index()->unsigned();
            $table->text('description');
            $table->text('link')->nullable();
            $table->timestamps();

            $table->foreign('faqs_id')->references('id')->on('faqs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faqdetails');
    }
}
