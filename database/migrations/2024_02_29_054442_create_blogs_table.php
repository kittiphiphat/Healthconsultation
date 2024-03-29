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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('email', 50)->nullable();
            $table->string('sex', 50)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('section', 50)->nullable();
            $table->text('respond')->nullable(); // ใช้ text แทน varchar สำหรับ respond และ content
            $table->text('content')->nullable();
            $table->boolean('status')->default(false);
            $table->string('age')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();// ใช้ timestamps() method แทนการใช้ created_at และ updated_at แยกกัน
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};
