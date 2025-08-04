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
        // Add Paystack settings to settings table
        DB::table('settings')->insert([
            ['key' => 'paystack_public_key', 'value' => ''],
            ['key' => 'paystack_secret_key', 'value' => ''],
            ['key' => 'paystack_webhook_secret', 'value' => ''],
            ['key' => 'paystack_enabled', 'value' => 0],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remove Paystack settings
        DB::table('settings')
            ->whereIn('key', [
                'paystack_public_key',
                'paystack_secret_key',
                'paystack_webhook_secret',
                'paystack_enabled'
            ])
            ->delete();
    }
};
