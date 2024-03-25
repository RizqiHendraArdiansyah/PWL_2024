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
            [   
                'barang_id' => 1,
                'kategori_id' => 1, 
                'barang_kode' => 'PA', 
                'barang_nama' => 'Celana Pendek',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
            ],
            [   
                'barang_id' => 2,
                'kategori_id' => 1, 
                'barang_kode' => 'PD', 
                'barang_nama' => 'Baju Kemeja',
                'harga_beli' => 200000,
                'harga_jual' => 250000,
            ],
            [   
                'barang_id' => 3,
                'kategori_id' => 2, 
                'barang_kode' => 'LP', 
                'barang_nama' => 'Laptop Notebook',
                'harga_beli' => 10000000,
                'harga_jual' => 12000000,
            ],
            [   
                'barang_id' => 4,
                'kategori_id' => 2, 
                'barang_kode' => 'AC', 
                'barang_nama' => 'Panasonic Pendingin Ruangan',
                'harga_beli' => 3000000,
                'harga_jual' => 3500000,
            ],
            [   
                'barang_id' => 5,
                'kategori_id' => 3, 
                'barang_kode' => 'KW', 
                'barang_nama' => 'Kosmetik Wardah',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
            ],
            [   
                'barang_id' => 6,
                'kategori_id' => 3, 
                'barang_kode' => 'NP', 
                'barang_nama' => 'Serum Natural Pacific Fresh Herb',
                'harga_beli' => 200000,
                'harga_jual' => 250000,
            ],
            [   
                'barang_id' => 7,
                'kategori_id' => 4, 
                'barang_kode' => 'SC', 
                'barang_nama' => 'Sabun Cuci Piring Mama Lemon',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
            ],
            [   
                'barang_id' => 8,
                'kategori_id' => 4, 
                'barang_kode' => 'PR', 
                'barang_nama' => 'Pengharum Ruangan Stella',
                'harga_beli' => 20000,
                'harga_jual' => 28000,
            ],
            [   
                'barang_id' => 9,
                'kategori_id' => 5, 
                'barang_kode' => 'AQ', 
                'barang_nama' => 'Botol Air Minum Aqua',
                'harga_beli' => 3000,
                'harga_jual' => 3500,
            ],
            [   
                'barang_id' => 10,
                'kategori_id' => 5, 
                'barang_kode' => 'MI', 
                'barang_nama' => 'Mie Instant Indomie',
                'harga_beli' => 3000,
                'harga_jual' => 3500,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}