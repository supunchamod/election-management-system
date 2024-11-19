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
        Schema::create('member_vote__summaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id');
            $table->integer('total_votes')->default(0);
            $table->decimal('vote_percentage', 5, 2)->default(0.00);

            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
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
        Schema::dropIfExists('member_vote__summaries');
    }
};
