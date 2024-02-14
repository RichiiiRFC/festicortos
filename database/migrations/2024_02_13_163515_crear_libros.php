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
        Schema::create('libros', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('autor_id')->constrained(
                table: 'autor', indexName: 'libros_autor_id',
            );
            $table->string('titulo');
            $table->string('editorial');
            $table->float('precio');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
