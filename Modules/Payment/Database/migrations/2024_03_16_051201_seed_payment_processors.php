<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $now = Carbon::now();
        foreach (['alepay', 'momo', 'utop', 'credit-card'] as $processor) {
            DB::table('payment_processors')->insert([
                'uuid' => Str::orderedUuid(),
                'name' => $processor,
                'model' => 'Modules\\Payment\\Services\\Processors\\' . Str::studly($processor) . 'Processor',
                'is_wallet' => $processor === 'credit-card',
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
