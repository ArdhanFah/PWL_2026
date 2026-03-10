<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'B001', 'barang_nama' => 'Indomie Goreng', 'harga_beli' => 2500, 'harga_jual' => 3000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'B002', 'barang_nama' => 'Sarimi Ayam', 'harga_beli' => 2000, 'harga_jual' => 2500],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'B003', 'barang_nama' => 'Ichi Ocha', 'harga_beli' => 3000, 'harga_jual' => 4500],
            ['barang_id' => 4, 'kategori_id' => 1, 'barang_kode' => 'B004', 'barang_nama' => 'Chitato', 'harga_beli' => 8000, 'harga_jual' => 10000],
            ['barang_id' => 5, 'kategori_id' => 1, 'barang_kode' => 'B005', 'barang_nama' => 'Pop Mie', 'harga_beli' => 4000, 'harga_jual' => 5500],

            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'B006', 'barang_nama' => 'Sikat Odol', 'harga_beli' => 10000, 'harga_jual' => 12500],
            ['barang_id' => 7, 'kategori_id' => 3, 'barang_kode' => 'B007', 'barang_nama' => 'Sabun', 'harga_beli' => 4000, 'harga_jual' => 5000],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'B008', 'barang_nama' => 'Daia', 'harga_beli' => 15000, 'harga_jual' => 18000],
            ['barang_id' => 9, 'kategori_id' => 3, 'barang_kode' => 'B009', 'barang_nama' => 'Sampo Ijo', 'harga_beli' => 20000, 'harga_jual' => 25000],
            ['barang_id' => 10, 'kategori_id' => 2, 'barang_kode' => 'B010', 'barang_nama' => 'VitaBuah', 'harga_beli' => 7000, 'harga_jual' => 9000],

            ['barang_id' => 11, 'kategori_id' => 4, 'barang_kode' => 'B011', 'barang_nama' => 'Huawei S23', 'harga_beli' => 12000000, 'harga_jual' => 14000000],
            ['barang_id' => 12, 'kategori_id' => 4, 'barang_kode' => 'B012', 'barang_nama' => 'Huawei A54', 'harga_beli' => 5000000, 'harga_jual' => 6000000],
            ['barang_id' => 13, 'kategori_id' => 4, 'barang_kode' => 'B013', 'barang_nama' => 'Monitor LED', 'harga_beli' => 2000000, 'harga_jual' => 2500000],
            ['barang_id' => 14, 'kategori_id' => 4, 'barang_kode' => 'B014', 'barang_nama' => 'TV Jadul', 'harga_beli' => 4000000, 'harga_jual' => 5000000],
            ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'B015', 'barang_nama' => 'Kulkas 1/2 Pintu', 'harga_beli' => 3000000, 'harga_jual' => 4000000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
