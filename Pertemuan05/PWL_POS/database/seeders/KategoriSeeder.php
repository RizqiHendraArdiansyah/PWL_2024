<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [   
                'kategori_id' => 1,
                'kategori_kode' => 'PE', 
                'kategori_nama' => 'Pakaian dan Aksesoris', 
            ],
            [   
                'kategori_id' => 2,
                'kategori_kode' => 'ET', 
                'kategori_nama' => 'Elektronik dan Teknologi', 
            ],
            [   
                'kategori_id' => 3,
                'kategori_kode' => 'KK', 
                'kategori_nama' => 'Kesehatan dan Kecantikan', 
            ],
            [   
                'kategori_id' => 4,
                'kategori_kode' => 'PR', 
                'kategori_nama' => 'Perlengkapan Rumah Tangga', 
            ],
            [   
                'kategori_id' => 5,
                'kategori_kode' => 'MM', 
                'kategori_nama' => 'Makanan dan Minuman', 
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}

