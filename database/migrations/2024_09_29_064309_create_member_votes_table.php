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
        Schema::create('member_votes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('election_result_id')->constrained('election_results')->onDelete('cascade');
            $table->foreignId('member_id')->constrained('members');
            $table->integer('votes');
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
        Schema::dropIfExists('member_votes');
    }
};
