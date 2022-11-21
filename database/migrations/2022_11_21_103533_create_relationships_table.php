<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('court_cases', function (Blueprint $table) {
            $table->unsignedBigInteger('support_team_id');
            $table->foreign('crime_id')->references('id')->on('crimes')->onDelete('cascade');
            $table->foreign('plainitiff_id')->references('id')->on('plainitiffs')->onDelete('cascade');
            $table->foreign('judge_id')->references('id')->on('judges')->onDelete('cascade');
            $table->foreign('support_team_id')->references('id')->on('support_teams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relationships');
    }
}
