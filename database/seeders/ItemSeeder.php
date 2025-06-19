<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder{
    public function run(): void
{
    Item::create(['name' => 'Sepatu Nike', 'quantity'
=> 2, 'notes' => 'Untuk Tidur']);
    Item::create(['name' => 'Sepatu Converse', 
'quantity' => 1, 'notes' => 'Warna hitam']);
    Item::create(['name' => 'Sepatu Pantofel', 
'quantity' => 1, 'notes' => 'Dipakai kerja']);
}

}