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
        DB::table('m_barang')->insert([
            // Barang dari Supplier 1
            [
                'kategori_id' => 1, // Elektronik
                'barang_kode' => 'BRG001',
                'barang_nama' => 'TV LED 32 Inch',
                'harga_beli' => 2000000,
                'harga_jual' => 2500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Kulkas 2 Pintu',
                'harga_beli' => 3000000,
                'harga_jual' => 3500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Mesin Cuci Front Load',
                'harga_beli' => 4000000,
                'harga_jual' => 4500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Laptop Core i5',
                'harga_beli' => 7000000,
                'harga_jual' => 8000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Smartphone 5G',
                'harga_beli' => 5000000,
                'harga_jual' => 5500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Barang dari Supplier 2
            [
                'kategori_id' => 2, // Pakaian
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Kaos Polos',
                'harga_beli' => 50000,
                'harga_jual' => 75000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Jaket Hoodie',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Jeans Slim Fit',
                'harga_beli' => 250000,
                'harga_jual' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Sepatu Sneakers',
                'harga_beli' => 350000,
                'harga_jual' => 450000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Topi Baseball',
                'harga_beli' => 75000,
                'harga_jual' => 100000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Barang dari Supplier 3
            [
                'kategori_id' => 3, // Makanan
                'barang_kode' => 'BRG011',
                'barang_nama' => 'Beras Premium 5kg',
                'harga_beli' => 60000,
                'harga_jual' => 75000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG012',
                'barang_nama' => 'Mie Instan 1 Dus',
                'harga_beli' => 80000,
                'harga_jual' => 100000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG013',
                'barang_nama' => 'Minyak Goreng 2L',
                'harga_beli' => 28000,
                'harga_jual' => 35000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG014',
                'barang_nama' => 'Susu Kental Manis',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG015',
                'barang_nama' => 'Roti Tawar',
                'harga_beli' => 12000,
                'harga_jual' => 18000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
