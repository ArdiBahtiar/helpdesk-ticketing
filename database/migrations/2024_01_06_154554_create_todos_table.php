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
        Schema::create('todos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            // $table->boolean('is_done')->default(false);
            $table->enum('status', ['on_Request', 'on_Progress', 'Pending', 'Finished'])->default('on_Request');
            $table->enum('dept', ['admin', 'user', 'manager'])->default('user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
