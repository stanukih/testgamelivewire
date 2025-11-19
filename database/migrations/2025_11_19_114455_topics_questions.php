<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('user_id')->constrained();
        });

        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('topic_id')->constrained();
            $table->text('question');
            $table->string('answer1');
            $table->string('answer2');
            $table->string('answer3');
            $table->string('answer4');
            $table->integer('correct');
            $table->text('comment');            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
