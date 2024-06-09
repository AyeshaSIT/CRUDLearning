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
        Schema::create('customer', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('customer_name',60);
            $table->string('customer_email',60)->nullable();
            $table->enum('customer_gender',['M','F','O'])->nullable();
            $table->text('customer_address',60)->nullable();
            $table->date('customer_dob',60)->nullable();
            $table->timestamps();
                    
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
