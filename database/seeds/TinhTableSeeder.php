<?php

use App\Tinh;
use Illuminate\Database\Seeder;

class TinhTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tinh = new Tinh();
        $tinh->ten_tinh = 'Hồ Chí Minh';
        $tinh->ma_tinh = 'SG';
        $tinh->save();

        $tinh1 = new Tinh();
        $tinh1->ten_tinh = 'Thừa Thiên Huế';
        $tinh1->ma_tinh = 'TTH';
        $tinh1->save();

        $tinh2 = new Tinh();
        $tinh2->ten_tinh = 'Đà Nẵng';
        $tinh2->ma_tinh = 'DN';
        $tinh2->save();

        $tinh3 = new Tinh();
        $tinh3->ten_tinh = 'Hà Nội';
        $tinh3->ma_tinh = 'HN';
        $tinh3->save();
    }
}
