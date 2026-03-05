<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 15; $i++) {
            DB::table('t_stok')->insert([
                'stok_id' => $i,
                'barang_id' => $i,
                'supplier_id' => rand(1, 3),
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => rand(1, 100),
            ]);
        }
    }
}
