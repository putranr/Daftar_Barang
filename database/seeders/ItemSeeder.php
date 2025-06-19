<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder{
    public function run(): void
{
    Item::create(['name' => 'Sepatu Compas', 'quantity'
=> 2, 'notes' => 'Untuk olahraga']);
    Item::create(['name' => 'Sepatu Jhonson', 
'quantity' => 1, 'notes' => 'Warna hitam']);
    Item::create(['name' => 'Sepatu Pantofel', 
'quantity' => 1, 'notes' => 'Dipakai kerja']);
}

}