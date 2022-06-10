<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();

            $table->text('history')->nullable();
            $table->text('offer_presentation')->nullable();
            $table->text('offer_prices')->nullable();
            $table->text('offer_qualities')->nullable();
            $table->text('target_audience')->nullable();
            $table->text('society_moral')->nullable();
            $table->text('offer_list')->nullable();
            $table->text('activity_area')->nullable();

            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            
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
        Schema::dropIfExists('details');
    }
};
