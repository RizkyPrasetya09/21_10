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
        Schema::create('tb_customer', function (Blueprint $table) { 
            $table->id('customer_id'); 
            $table->string('customer_name'); 
            $table->string('contact_name'); 
            $table->string('address')->nullable(); 
            $table->string('city')->nullable(); 
            $table->timestamps(); 
        }); 
    } 
 
    /** 
     * Reverse the migrations. 
     */ 
    public function down(): void 
    { 
        Schema::dropIfExists('tb_customer'); 
    } 
};