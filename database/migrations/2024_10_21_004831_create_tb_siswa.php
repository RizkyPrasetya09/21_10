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
        Schema::create('tb_siswa', function (Blueprint $table) { 
            $table->id(); 
            $table->string('nama'); 
            $table->string('nama_belakang'); 
            $table->string('nis_siswa'); 
            $table->string('nisn'); 
            $table->string('alamat'); 
            $table->date('tanggal_lahir'); 
            $table->string('jenis_kelamin'); 
            $table->string('no_telepon'); 
            $table->timestamps(); 
        }); 
    } 
 
    /** 
     * Reverse the migrations. 
     */ 
    public function down(): void 
    { 
        Schema::dropIfExists('tb_siswa'); 
    } 
};
