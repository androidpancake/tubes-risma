<?php

namespace Database\Seeders;

use App\Models\Pengaduan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengaduan::create(
            [
                'namaBarang' => 'Dompet',
                'jumlahBarang' => '1',
                'lokasiTerakhir' => 'Sukapura',
                'deskripsi' => 'blabla',
                'image' => 'diawur.jpg',
                'users_id' => '2'
            ],
        );
    }
}
