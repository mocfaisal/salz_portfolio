<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMExp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('m_exp')) {
        Schema::create('m_exp', function (Blueprint $table) {
            $table->id()->key()->autoIncrement();
            $table->string("exp_name", 255)->comment('Title');
            $table->string("exp_year", 255);
            $table->text('exp_details')->nullable();
            $table->enum('exp_is_currently', ['0', '1'])->default('0')->comment('Is currently summary. set 1 if true, other record must set 0');
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
        Schema::dropIfExists('m_exp');
    }
}
