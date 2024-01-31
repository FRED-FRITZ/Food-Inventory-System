<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_type');
            $table->string('quantity');
            $table->string('transaction_date');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
