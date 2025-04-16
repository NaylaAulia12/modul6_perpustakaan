<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perpustakaan;
use App\Models\Buku;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Perpustakaan::factory(5)->create()->each(function ($perpustakaan) {
            Buku::factory(5)->create([
                'perpustakaan_id' => $perpustakaan->id
            ]);
        });
    }
}
