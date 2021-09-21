<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'CarBrand' => 'Kia',
            'CarModel' => 'Sorento',
            'CarPrice' => '30',
            'CarPlate' => '51A 36785',
            'CarPic' => 'https://cdn.jdpower.com/JDPA_2021%20Kia%20Sorento%20SX%20Prestige%20X-Line%202_5T%20Green%20Front%20Quarter%20View.jpg',
            ]);
        DB::table('cars')->insert([
            'CarBrand' => 'Kia',
            'CarModel' => 'Cerato',
            'CarPrice' => '20',
            'CarPlate' => '51A 64753',
            'CarPic' => 'https://i.banxeoto.net/oto/w450xh337/2021/06/15/kia-cerato-20-premium-2021-at-8669768129.jpg',
            ]);
        DB::table('cars')->insert([
            'CarBrand' => 'Hyundai',
            'CarModel' => 'Grand i10',
            'CarPrice' => '10',
            'CarPlate' => '51H 12345',
            'CarPic' => 'https://i.banxeoto.net/oto/w450xh337/2021/06/21/hyundai-grand-i10-2021-12l-mt-8663544638.jpg',
            ]);
        DB::table('cars')->insert([
            'CarBrand' => 'Hyundai',
            'CarModel' => 'Accent',
            'CarPrice' => '15',
            'CarPlate' => '51A 68346',
            'CarPic' => 'https://i.banxeoto.net/oto/w450xh337/2021/07/27/gia-lan-banh-hyundai-accent-2021-mt-at-da-nang-giam-gia-cuc-tot-thang-ngau-1-84391249235.jpg',
            ]);            
        DB::table('cars')->insert([
            'CarBrand' => 'Hyundai',
            'CarModel' => 'Elantra',
            'CarPrice' => '25',
            'CarPlate' => '51A 67789',
            'CarPic' => 'https://i.banxeoto.net/oto/w450xh337/2021/06/21/hyundai-elantra-2021-16l-at-8631434152.jpg',
            ]); 
        DB::table('cars')->insert([
            'CarBrand' => 'Hyundai',
            'CarModel' => 'Kona',
            'CarPrice' => '30',
            'CarPlate' => '51A 23345',
            'CarPic' => 'https://i.banxeoto.net/oto/w450xh337/2021/07/14/giam-soc-50tr-cho-hyundai-kona-xe-san-du-mau-gop-80-2-84344566284.jpg',
            ]);
        DB::table('cars')->insert([
            'CarBrand' => 'Hyundai',
            'CarModel' => 'Genesis',
            'CarPrice' => '50',
            'CarPlate' => '51A 11145',
            'CarPic' => 'https://carsguide-res.cloudinary.com/image/upload/f_auto,fl_lossy,q_auto,t_default/v1/editorial/vhs/Hyundai-Genesis.png',
            ]);
        DB::table('cars')->insert([
            'CarBrand' => 'Mazda',
            'CarModel' => 'X2',
            'CarPrice' => '15',
            'CarPlate' => '51A 57683',
            'CarPic' => 'https://i.banxeoto.net/oto/w450xh337/2021/06/09/new-mazda-2-2021-3-62551159.jpg',
            ]);
        DB::table('cars')->insert([
            'CarBrand' => 'Mazda',
            'CarModel' => 'X3',
            'CarPrice' => '25',
            'CarPlate' => '51A 24156',
            'CarPic' => 'https://i.banxeoto.net/oto/w450xh337/2021/03/18/mazda-3-deluxe-15l-2021-at-8691854349.jpg',
            ]);            
        DB::table('cars')->insert([
            'CarBrand' => 'Mazda',
            'CarModel' => 'X5',
            'CarPrice' => '45',
            'CarPlate' => '51A 85632',
            'CarPic' => 'https://i.banxeoto.net/oto/w450xh337/2021/05/12/new-mazda-2-nhap-khau-thai-lan-2-55226933.jpg',
            ]);            
    }
}
