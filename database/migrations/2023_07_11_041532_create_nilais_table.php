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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('peserta_id')->references('id')->on('pesertas')->onDelete('cascade');;
            $table->string('nilai_rata_rata', 30)->default("0");
            $table->string('nilai_matematika', 30)->default("0");
            $table->string('keterampilan', 30)->default("0");
            $table->string('perilaku', 30)->default("0");
            $table->string('kecepatan', 30)->default("0");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};
