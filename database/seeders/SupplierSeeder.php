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
        DB::table('m_supplier')->insert([
            [
                'supplier_kode' => 'SUP001',
                'supplier_nama' => 'PT Sumber Makmur',
                'supplier_alamat' => 'Jl. Merdeka No. 123, Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'supplier_kode' => 'SUP002',
                'supplier_nama' => 'CV Berkah Jaya',
                'supplier_alamat' => 'Jl. Diponegoro No. 45, Bandung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'supplier_kode' => 'SUP003',
                'supplier_nama' => 'UD Sejahtera',
                'supplier_alamat' => 'Jl. Sudirman No. 78, Surabaya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
