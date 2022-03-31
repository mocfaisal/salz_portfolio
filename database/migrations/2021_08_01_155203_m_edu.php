<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MEdu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('m_edu')) {
        Schema::create('m_edu', function (Blueprint $table) {
            $table->id()->key()->autoIncrement();
            $table->integer('edu_type_id')->nullable();
            $table->string('edu_name', 255)->comment('Title');
            $table->string('edu_year', 255);
            $table->text('edu_details')->nullable();
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
        Schema::dropIfExists('m_edu');
    }
}
