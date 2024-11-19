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
        Schema::table('member_votes', function (Blueprint $table) {
            $table->decimal('votes_percentage', 5, 2)->nullable(); // Add the percentage column
        });
    }

    public function down()
    {
        Schema::table('member_votes', function (Blueprint $table) {
            $table->dropColumn('votes_percentage');
        });
    }
};
