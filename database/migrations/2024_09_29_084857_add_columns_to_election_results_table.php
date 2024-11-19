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
        Schema::table('election_results', function (Blueprint $table) {
            $table->decimal('valid_votes_percentage', 5, 2)->nullable();
            $table->decimal('rejected_votes_percentage', 5, 2)->nullable();
            $table->decimal('votes_polled_percentage', 5, 2)->nullable();
        });
    }

    public function down()
    {
        Schema::table('election_results', function (Blueprint $table) {
            $table->dropColumn(['valid_votes_percentage', 'rejected_votes_percentage', 'votes_polled_percentage']);
        });
    }
};
