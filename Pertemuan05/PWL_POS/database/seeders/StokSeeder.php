<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [   
                'stok_id' => 1,
                'barang_id' => 1, 
                'user_id' => 2, 
                'stok_tanggal' => '2024-02-06 07:17:49',
                'stok_jumlah' => 50,
            ],
            [   
                'stok_id' => 2,
                'barang_id' => 2, 
                'user_id' => 2, 
                'stok_tanggal' => '2024-02-01 08:17:50',
                'stok_jumlah' => 55,
            ],
            [   
                'stok_id' => 3,
                'barang_id' => 3, 
                'user_id' => 2, 
                'stok_tanggal' => '2024-02-01 10:17:34',
                'stok_jumlah' => 25,
            ],
            [   
                'stok_id' => 4,
                'barang_id' => 4, 
                'user_id' => 2, 
                'stok_tanggal' => '2024-02-01 10:18:50',
                'stok_jumlah' => 60,
            ],
            [   
                'stok_id' => 5,
                'barang_id' => 5, 
                'user_id' => 2, 
                'stok_tanggal' => '2024-02-01 09:17:36',
                'stok_jumlah' => 65,
            ],
            [   
                'stok_id' => 6,
                'barang_id' => 6, 
                'user_id' => 2, 
                'stok_tanggal' => '2024-02-01 08:12:50',
                'stok_jumlah' => 55,
            ],
            [   
                'stok_id' => 7,
                'barang_id' => 7, 
                'user_id' => 2, 
                'stok_tanggal' => '2024-02-01 08:20:50',
                'stok_jumlah' => 30,
            ],
            [   
                'stok_id' => 8,
                'barang_id' => 8, 
                'user_id' => 2, 
                'stok_tanggal' => '2024-02-01 06:17:44',
                'stok_jumlah' => 40,
            ],
            [   
                'stok_id' => 9,
                'barang_id' => 9, 
                'user_id' => 2, 
                'stok_tanggal' => '2024-02-01 05:17:48',
                'stok_jumlah' => 70,
            ],
            [   
                'stok_id' => 10,
                'barang_id' => 10, 
                'user_id' => 2, 
                'stok_tanggal' => '2024-02-01 07:19:58',
                'stok_jumlah' => 100,
            ],
        ];
        DB::table('t_stok')->insert($data);
    }
}
