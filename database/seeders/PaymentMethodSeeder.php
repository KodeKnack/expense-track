<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $methods = ['cash', 'credit_card', 'bank_transfer', 'debit card', 'mobile payment'];
        foreach ($methods as $method) {
            PaymentMethod::create(['name' => $method]);
        }
    }
}
