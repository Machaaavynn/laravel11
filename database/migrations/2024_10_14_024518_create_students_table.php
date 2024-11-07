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
       // Migrasi untuk tabel 'students'
       Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->foreignId('grade_id');
        $table->foreignId('department_id');
        $table->foreignId('descipsi');
        $table->string('email')->unique();
        $table->text('alamat');
        $table->timestamps();
    });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};