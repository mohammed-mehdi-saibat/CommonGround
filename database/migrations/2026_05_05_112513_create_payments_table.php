<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained()->onDelete('cascade');
            $table->string('stripe_session_id')->unique();
            $table->string('stripe_payment_intent')->nullable();
            $table->enum('status', ['pending', 'paid', 'failed'])->default('pending');
            $table->decimal('amount', 13, 4);
            $table->string('currency', 3)->default('usd');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
