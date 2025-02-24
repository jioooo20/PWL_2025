<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_penjualan')->insert([
            [
                'user_id' => 3, // Admin/User yang menangani transaksi
                'pembeli' => 'Andi',
                'penjualan_kode' => 'TRX-' . Str::random(6),
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'TRX-' . Str::random(6),
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Citra',
                'penjualan_kode' => 'TRX-' . Str::random(6),
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Dewi',
                'penjualan_kode' => 'TRX-' . Str::random(6),
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Eka',
                'penjualan_kode' => 'TRX-' . Str::random(6),
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' =>  3,
                'pembeli' => 'Faisal',
                'penjualan_kode' => 'TRX-' . Str::random(6),
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' =>  3,
                'pembeli' => 'Gita',
                'penjualan_kode' => 'TRX-' . Str::random(6),
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' =>  3,
                'pembeli' => 'Hadi',
                'penjualan_kode' => 'TRX-' . Str::random(6),
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' =>  3,
                'pembeli' => 'Indra',
                'penjualan_kode' => 'TRX-' . Str::random(6),
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' =>  3,
                'pembeli' => 'Joko',
                'penjualan_kode' => 'TRX-' . Str::random(6),
                'penjualan_tanggal' => now(),
            ],
        ]);
    }
}
