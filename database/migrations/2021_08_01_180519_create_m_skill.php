<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMSkill extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        if (!Schema::hasTable('m_skill')) {
        Schema::create('m_skill', function (Blueprint $table) {
            $table->id()->key()->autoIncrement();
            $table->string('name', 255);
            $table->integer('value')->comment('percentage');
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('m_skill');
    }
}
