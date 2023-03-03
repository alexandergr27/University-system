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
        Schema::create('students', function (Blueprint $table) {
            $table->bigInteger('document');
            $table->primary('document');
            $table->string('name', 80);
            $table->string('last_name', 80);
            $table->date('date_birth');
            $table->string('email')->unique();
            $table->string('phone_number', 15);
            $table->string('address', 80);
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
