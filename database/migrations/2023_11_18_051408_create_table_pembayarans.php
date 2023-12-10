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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('santri_id2')->constrained(); 
            $table->string('weight'); 
            $table->string('blood_presure'); 
            $table->string('pulse'); 
            $table->string('body_temprature'); 
            $table->string('respiratory'); 
            $table->string('complaints'); 
            $table->string('physical_check'); 
            $table->string('treatment'); 
            $table->string('diagnoses'); 
            $table->string('therapy'); 
            $table->string('recomendation'); 
            $table->foreignId('santri_id')->constrained(); 
            $table->integer('total_payment');
            $table->integer('total_purchase');
            // $table->foreignId('user_id')->constrained(); 
            $table->string('paid_by'); 
            $table->integer('paid_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};