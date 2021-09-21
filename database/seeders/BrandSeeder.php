<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'BrandName' => 'Kia',
            'BrandAdd' => 'Ho Chi Minh',
            'BrandFax' => '0707050505',
            'BrandPhone' => '0905020103',
            'Brandmail' => 'info@kiamotors.com',
            'BrandLogo' => 'https://anphucar.vn/wp-content/uploads/2020/06/Logo-Kia-Mau-Den.jpg',
            ]);
        DB::table('brands')->insert([
            'BrandName' => 'Hyundai',
            'BrandAdd' => 'Ha Noi',
            'BrandFax' => '0708060523',
            'BrandPhone' => '0906050402',
            'Brandmail' => 'info@huyandai.com',
            'BrandLogo' => 'https://drivetribe.imgix.net/M2b0wH9pQSC7DZPGHAm8Uw?w=1158&h=651&auto=format,compress&fit=crop&crop=faces',
            ]);   
        DB::table('brands')->insert([
            'BrandName' => 'Mazda',
            'BrandAdd' => 'Da Nang',
            'BrandFax' => '0102050603',
            'BrandPhone' => '0908070102',
            'Brandmail' => 'info@mazdavietnam.com',
            'BrandLogo' => 'https://brandslogo.net/wp-content/uploads/2013/03/mazda-black-vector-logo.png',
            ]); 
    }
}
