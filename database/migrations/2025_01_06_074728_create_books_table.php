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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('Title', 255);
            $table->string('Author', 100);
            $table->string('Public', 4);
            $table->foreignId('category_id')->references('id')->on('categories')->contrained()->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('publisher_id')->references('id')->on('publishers')->contrained()->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
