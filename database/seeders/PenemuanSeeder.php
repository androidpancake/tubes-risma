<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penemuan;

class PenemuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penemuan::create(
            [
                'pesan' => 'Saya menemukan',
                'image' => 'img.jpg',
                'lokasi' => 'Sukapura',
                'pengaduan_id' => '6'
            ],
        );
    }
}
