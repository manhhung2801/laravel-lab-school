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
        Schema::create('tins', function (Blueprint $table) {
            $table->id();
            $table->string('tieuDe');
            $table->string('tomTat');
            $table->integer('xem');
            $table->dateTime('ngayDang');
            $table->integer('idLT');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tins');
    }
};
