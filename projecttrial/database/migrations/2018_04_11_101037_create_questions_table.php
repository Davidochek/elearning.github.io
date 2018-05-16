<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
             $table->longText('question')->nullable();
            $table->longText('answer')->nullable();
            $table->string('school');
            $table->string('course');
            $table->string('name');
            $table->string('description')->nullable();
            $table->longText('assignment')->nullable();
            $table->string('notesdescription')->nullable();
            $table->longText('notes')->nullable();
            $table->longText('pdfs')->nullable();
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
        Schema::dropIfExists('questions');
    }
}
