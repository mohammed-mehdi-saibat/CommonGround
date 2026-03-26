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
        Schema::create('dorms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->integer('total_beds');
            $table->enum('gender_type', ['mixed', 'female_only', 'male_only'])->default('mixed');
            $table->boolean('is_ensuite')->default(false); // true if it has a private bathroom
            $table->decimal('base_price', 13, 4);
            $table->string('currency')->default('USD');
            $table->boolean('has_ac')->default(false); // true if it has air conditioner
            $table->boolean('has_lockers')->default(false); // true if the room provides secure storage
            $table->boolean('has_individual_plugs')->default(false);
            $table->boolean('has_curtains')->default(false); // true if it has "pod style" privacy 
            $table->boolean('is_active')->default(true); // false if the room is under maintenance
            $table->integer('floor_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dorms');
    }
};
