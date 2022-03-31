<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MSosmed extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        if (!Schema::hasTable('m_sosmed')) {
        Schema::create('m_sosmed', function (Blueprint $table) {
            $table->id()->key()->autoIncrement();
            $table->string('name', 255);
            $table->string('value', 255);
            $table->text('details')->nullable();
            $table->enum('is_socialMedia', ['0','1'])->nullable()->default('0');
            $table->string('icon_socialMedia', 100)->nullable();
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
        Schema::dropIfExists('m_sosmed');
    }
}
