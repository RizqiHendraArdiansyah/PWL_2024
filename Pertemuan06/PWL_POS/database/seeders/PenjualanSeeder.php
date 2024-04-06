<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [   
                'penjualan_id' => 1,
                'user_id' => 3, 
                'pembeli' => 'Rizqi Hendra', 
                'penjualan_kode' => 'AA1',
                'penjualan_tanggal' => '2024-03-06 10:17:49',
            ],
            [   
                'penjualan_id' => 2,
                'user_id' => 3, 
                'pembeli' => 'Bangkit Caniago', 
                'penjualan_kode' => 'AA2',
                'penjualan_tanggal' => '2024-02-02 10:12:33',
            ],
            [   
                'penjualan_id' => 3,
                'user_id' => 3, 
                'pembeli' => 'Ferly Prasetyo', 
                'penjualan_kode' => 'AA3',
                'penjualan_tanggal' => '2024-02-02 10:30:49',
            ],
            [   
                'penjualan_id' => 4,
                'user_id' => 3, 
                'pembeli' => 'Rahmat Hidayat', 
                'penjualan_kode' => 'AA4',
                'penjualan_tanggal' => '2024-03-06 10:38:40',
            ],
            [   
                'penjualan_id' => 5,
                'user_id' => 3, 
                'pembeli' => 'Neddy Wiryawan', 
                'penjualan_kode' => 'AA5',
                'penjualan_tanggal' => '2024-03-06 10:39:49',
            ],
            [   
                'penjualan_id' => 6,
                'user_id' => 3, 
                'pembeli' => 'Jessica', 
                'penjualan_kode' => 'AA6',
                'penjualan_tanggal' => '2024-03-06 11:05:49',
            ],
            [   
                'penjualan_id' => 7,
                'user_id' => 3, 
                'pembeli' => 'Putri Aini', 
                'penjualan_kode' => 'AA7',
                'penjualan_tanggal' => '2024-03-07 11:22:19',
            ],
            [   
                'penjualan_id' => 8,
                'user_id' => 3, 
                'pembeli' => 'Friska Amanda', 
                'penjualan_kode' => 'AA8',
                'penjualan_tanggal' => '2024-03-07 12:09:49',
            ],
            [   
                'penjualan_id' => 9,
                'user_id' => 3, 
                'pembeli' => 'Budi Sutanto', 
                'penjualan_kode' => 'AA9',
                'penjualan_tanggal' => '2024-03-08 12:17:49',
            ],
            [   
                'penjualan_id' => 10,
                'user_id' => 3, 
                'pembeli' => 'Awan Setho', 
                'penjualan_kode' => 'AA10',
                'penjualan_tanggal' => '2024-03-08 12:18:29',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
