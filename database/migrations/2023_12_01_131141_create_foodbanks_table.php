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
            $table->string('name');
            $table->foreignId('organization_id');
            $table->foreignId('address_id');
            $table->foreignId('logo_annex_id');
            $table->string('phone');
            $table->string('email');
            $table->string('website_url');
            $table->boolean('requires_referral');
            $table->string('opening_hours');
            $table->string('accessibility');
            $table->string('comments');
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
