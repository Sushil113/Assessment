<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TransactionHistory;

class TransactionHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TransactionHistory::insert([
            [
                'deposit_time' => '14:00:00',
                'amount' => 30000000, 
                'deposit_date' => '2024-12-25',
                'billing_amount' => 23000000, 
                'status' => 1, 
            ],
            [
                'deposit_time' => '14:00:00',
                'amount' => 30000000,
                'deposit_date' => '2024-12-25',
                'billing_amount' => 23000000,
                'status' => 0, 
            ],
            [
                'deposit_time' => '14:00:00',
                'amount' => 30000000,
                'deposit_date' => '2024-12-25',
                'billing_amount' => 23000000,
                'status' => 1,
            ],
            [
                'deposit_time' => '14:00:00',
                'amount' => 30000000,
                'deposit_date' => '2024-12-25',
                'billing_amount' => 23000000,
                'status' => 0,
            ],
            [
                'deposit_time' => '14:00:00',
                'amount' => 30000000,
                'deposit_date' => '2024-12-25',
                'billing_amount' => 23000000,
                'status' => 1,
            ],
        ]);
    }
}
