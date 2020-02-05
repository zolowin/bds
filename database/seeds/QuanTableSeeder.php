<?php

use App\Quan;
use Illuminate\Database\Seeder;

class QuanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quan = new Quan();
        $quan->ten_quan = "Binh Chanh";
        $quan->tinh_id = 1;
        $quan->loai = "Huyện";
        $quan->save();

        $quan1 = new Quan();
        $quan1->ten_quan = "Bình Tân";
        $quan1->tinh_id = 1;
        $quan1->loai = "Quận";
        $quan1->save();

        $quan2 = new Quan();
        $quan2->ten_quan = "Quận 1";
        $quan2->tinh_id = 1;
        $quan2->loai = "Quận";
        $quan2->save();

        $quan3 = new Quan();
        $quan3->ten_quan = "Huế";
        $quan3->tinh_id = 2;
        $quan3->loai = "Thành Phố";
        $quan3->save();

        $quan4 = new Quan();
        $quan4->ten_quan = "Hương Thủy";
        $quan4->tinh_id = 2;
        $quan4->loai = "Thị xã";
        $quan4->save();

        $quan5 = new Quan();
        $quan5->ten_quan = "Phú Lộc";
        $quan5->tinh_id = 2;
        $quan5->loai = "Huyện";
        $quan5->save();
    }
}
