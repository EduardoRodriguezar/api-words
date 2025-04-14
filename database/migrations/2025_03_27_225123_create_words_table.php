<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('words', function (Blueprint $table) {
        $table->id();
        $table->string('word');
        $table->foreignId('category_id')->constrained('categories'); // Clave foránea de categories
        $table->foreignId('option_id')->constrained('options'); // Clave foránea de options
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('words');
    }
};
