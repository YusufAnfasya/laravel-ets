<?php

namespace Database\Seeders;

use App\Models\pasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pasienSeeder = [
            [
                'id' => 1,
                'nama'           =>'mamang1',
                'alamat'    =>'jalan semen',
                'umur'  =>'22'

            ],
             [
                'id' => 2,
                'nama'           =>'mamang2',
                'alamat'    =>'jalan semen2',
                'umur'  =>'23'
            ],
             [
                'id' => 3,
                'nama'           =>'mamang3',
                'alamat'    =>'jalan semen3',
                'umur'  =>'23'
            ],
             [
                'id' => 4,
                'nama'           =>'mamang4',
                'alamat'    =>'jalan semen4',
                'umur'  =>'22'
            ],
            [
                'id' => 5,
                'nama'           =>'mamang5',
                'alamat'    =>'jalan semen5',
                'umur'  =>'22'
            ],
        ];

        pasien::insert($pasienSeeder);
    }
}
