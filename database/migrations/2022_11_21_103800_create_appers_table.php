<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appers', function (Blueprint $table) {
            $table->unsignedBigInteger('case_id');
            $table->unsignedBigInteger('defendant_id');
            $table->foreign('case_id')->references('id')->on('court_cases')->onDelete('cascade');
            $table->foreign('defendant_id')->references('id')->on('defendants')->onDelete('cascade');
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
        Schema::dropIfExists('appers');
    }
}
