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
        Schema::create('election_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('district_id')->constrained('districts');
            $table->foreignId('division_id')->constrained('divisions');
            $table->integer('number_of_registered_electors');
            $table->integer('number_of_votes_polled');
            $table->integer('number_of_rejected_votes');
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
        Schema::dropIfExists('election_results');
    }
};
