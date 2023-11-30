<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($data=0; $data<50; $data++){
            DB::table('products')->insert(
                [
                    'name' => "Laptop",
                    'quantity' => "20",
                    'price' => "100.50",
                ]
            );
        }
    }
}
