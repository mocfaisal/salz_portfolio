<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMAbout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('m_about')) {
        Schema::create('m_about', function (Blueprint $table) {
            $table->id();
            $table->string('job_name', 100)->nullable();
            $table->string('job_name_detail', 100)->nullable();
            $table->date('user_dob')->nullable();
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_about');
    }
}
