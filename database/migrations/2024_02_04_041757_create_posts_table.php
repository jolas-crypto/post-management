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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->index();
            $table->text('description');
            $table->tinyInteger('rating')->default(0)->comment('Rating from 1 to 5');
            $table->integer('user_id')->default(0)->comment('Created by');
            $table->boolean('editing')->default(false)->comment('Can edit the description');
            $table->boolean('archive')->default(false)->comment('Can archive the post');
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
