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
        Schema::create('votes_summary', function (Blueprint $table) {
            $table->id();
            $table->integer('total_number_of_registered_electors');
            $table->integer('total_number_of_votes_polled');
            $table->integer('total_number_of_rejected_votes');
            $table->integer('total_number_of_valid_votes');
            $table->decimal('valid_votes_percentage', 5, 2);
            $table->decimal('rejected_votes_percentage', 5, 2);
            $table->decimal('votes_polled_percentage', 5, 2);
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
        Schema::dropIfExists('votes_summary');
    }
};
