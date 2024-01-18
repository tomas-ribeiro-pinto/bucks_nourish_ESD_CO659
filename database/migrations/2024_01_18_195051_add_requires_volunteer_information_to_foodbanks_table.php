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
        Schema::table('foodbanks', function (Blueprint $table) {
            $table->addColumn('boolean', 'requires_volunteer')->nullable()->after('requires_referral');
            $table->addColumn('text', 'volunteer_information')->nullable()->after('requires_volunteer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('foodbanks', function (Blueprint $table) {
            $table->dropColumn('requires_volunteer');
            $table->dropColumn('volunteer_information');
        });
    }
};
