<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Ambil semua penjualan dan barang dari database
          $penjualan = DB::table('t_penjualan')->pluck('penjualan_id');
          $barang = DB::table('m_barang')->pluck('barang_id');

          // Pastikan ada cukup barang
          if ($barang->count() < 3) {
              throw new \Exception("Minimal harus ada 3 barang di tabel m_barang.");
          }

          $data = [];

          foreach ($penjualan as $penjualan_id) {
              // Ambil 3 barang secara acak
              $selectedBarang = $barang->random(3);

              foreach ($selectedBarang as $barang_id) {
                  $data[] = [
                      'penjualan_id' => $penjualan_id,
                      'barang_id' => $barang_id,
                      'harga' => rand(5000, 50000), // Harga random
                      'jumlah' => rand(1, 5), // Jumlah random
                      'created_at' => now(),
                      'updated_at' => now(),
                  ];
              }
          }

          // Insert ke database
          DB::table('t_penjualan_detail')->insert($data);
    }
}
