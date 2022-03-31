<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMTestimonials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('m_testimonials')) {
        Schema::create('m_testimonials', function (Blueprint $table) {
            $table->id()->key()->autoIncrement();
            $table->string('test_name', 100);
            $table->string('test_job', 100)->nullable();
            $table->text('test_desc')->nullable();
            $table->text('test_img')->nullable();
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
        Schema::dropIfExists('testimonials');
    }
}
