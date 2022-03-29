<?php

namespace Database\Seeders;

use App\Models\dokter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dokterSeeder = [
            [
                'id' => 1,
                'nama'           =>'dokter1',
                'spesialis' => 'kandungan',
                'alamat'    =>'jalan semen',
                'umur'  =>'29'

            ],
            [
                'id' => 2,
                'nama'           =>'dokter2',
                'spesialis' => 'THT',
                'alamat'    =>'jalan bata',
                'umur'  =>'32'

            ],
            [
                'id' => 3,
                'nama'           =>'dokter3',
                'spesialis' => 'tulang',
                'alamat'    =>'jalan genteng',
                'umur'  =>'62'

            ],
            [
                'id' => 4,
                'nama'           =>'dokter4',
                'spesialis' => 'kulit',
                'alamat'    =>'jalan ayani',
                'umur'  =>'42'

            ],
        ];

        dokter::insert($dokterSeeder);
    }
}