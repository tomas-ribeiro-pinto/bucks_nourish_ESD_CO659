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
        Schema::create('foodbanks', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('type')->default('foodbank');
            $table->foreignId('organization_id')->nullable();
            $table->foreignId('address_id')->nullable();
            $table->foreignId('logo_annex_id')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('website_url')->nullable();
            $table->boolean('requires_referral')->nullable();
            $table->string('opening_hours')->nullable();
            $table->string('accessibility')->nullable();
            $table->string('comments')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foodbanks');
    }
};
