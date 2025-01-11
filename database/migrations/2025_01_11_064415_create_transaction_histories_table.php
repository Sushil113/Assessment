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
        Schema::create('transaction_histories', function (Blueprint $table) {
            $table->id();
            $table->time('deposit_time');
            $table->decimal('amount', 10, 2); 
            $table->date('deposit_date');
            $table->decimal('billing_amount', 10, 2);
            $table->boolean('status');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_histories');
    }
};
