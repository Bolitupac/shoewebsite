<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('order_number')->nullable()->after('id');
        });

        $orders = DB::table('orders')->select('id')->orderBy('id')->get();

        foreach ($orders as $order) {
            DB::table('orders')
                ->where('id', $order->id)
                ->update([
                    'order_number' => 'NS-' . now()->format('Ymd') . '-' . str_pad((string) $order->id, 6, '0', STR_PAD_LEFT),
                ]);
        }

        Schema::table('orders', function (Blueprint $table) {
            $table->unique('order_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropUnique(['order_number']);
            $table->dropColumn('order_number');
        });
    }
};
