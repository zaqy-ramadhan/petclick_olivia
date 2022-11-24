<?php

namespace Database\Seeders;

use App\Models\clinic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClinicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        clinic::create([
            'clinic_name' => 'Clinic A',
            'clinic_address' => 'Jl. Mayjen Prof. Dr. Moestopo',
            'img_link' => 'https://i.pinimg.com/originals/43/db/a4/43dba4ad5630f8b11c8ce3097850c9b5.jpg',
            'map_link' => 'https://goo.gl/maps/wjYbKBDFLuu3Cygq5'
        ]);

        clinic::create([
            'clinic_name' => 'Clinic B',
            'clinic_address' => 'Jl. Airlangga',
            'img_link' => 'https://archello.s3.eu-central-1.amazonaws.com/images/2020/03/17/Liqui-Group--Browns-Pet-Store-1920-0282.1584452538.8015.jpg',
            'map_link' => 'https://goo.gl/maps/7fjFBwTFtJm5jxAC6'
        ]);

        clinic::create([
            'clinic_name' => 'Clinic C',
            'clinic_address' => 'Jl. Dr. Ir. H. Soekarno',
            'img_link' => 'https://www.thepetpractice.com.au/wp-content/uploads/2017/05/pet-practise-scaled.jpg',
            'map_link' => 'https://goo.gl/maps/97QCcfqZGXNrohMa6'
        ]);
    }
}
