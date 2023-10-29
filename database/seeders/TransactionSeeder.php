<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payment = [
            [
                'payment' => 'Bank',
            ],
            [
                'payment' => 'QRIS',
            ],

        ];
        DB::table('payment_methods')->insert($payment);

        $transaction = [
            [
                'date' => now()->addDays(rand(1, 30)),
                'total' => 12000.45,
                'payment_method_id' => 1,
                'user_id' => 1,
            ],
            [
                'date' => now()->addDays(rand(1, 30)),
                'total' => 14000.45,
                'payment_method_id' => 1,
                'user_id' => 1,
            ],

        ];

        DB::table('transactions')->insert($transaction);
    }
}
