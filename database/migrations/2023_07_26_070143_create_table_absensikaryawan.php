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
        Schema::create('table_absensikaryawan', function (Blueprint $table) {
            $table->id();
            // $table->id();
             $table->integer('id_karyawan');
            $table->string('nama_karyawan',50);
            $table->enum('jk', ['L','P']);
            $table->date('tanggal');
            $table->string('keterangan');
            $table->primary('id_karyawan');
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_absensikaryawan');
    }
};

