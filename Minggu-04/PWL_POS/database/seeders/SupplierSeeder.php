<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'SUPY01', 'supplier_nama' => 'PT. Sarimi', 'supplier_alamat' => 'Jakarta'],
            ['supplier_id' => 2, 'supplier_kode' => 'SUPY02', 'supplier_nama' => 'Unilever', 'supplier_alamat' => 'Surabaya'],
            ['supplier_id' => 3, 'supplier_kode' => 'SUPY03', 'supplier_nama' => 'Huawei Elektronik', 'supplier_alamat' => 'Bekasi'],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
