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
        Schema::create('gifts', function (Blueprint $table) {
            $table->id();

            //カラム追加
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->nullable();
            $table->string('message');
            $table->string('giftername');
            $table->binary('giftphoto')->nullable();
            $table->string('giftname');
            $table->integer('giftfee');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gifts');
    }
};
