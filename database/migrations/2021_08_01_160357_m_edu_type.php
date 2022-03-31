<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MEduType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('m_edu_type')) {
        Schema::create('m_edu_type', function (Blueprint $table) {
            $table->id()->key()->autoIncrement();
             $table->string('edu_type_name', 255);
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
        Schema::dropIfExists('m_edu_type');
    }
}
