<?php 

class HomeController extends Controller {


    public function home() {
        $latestCourse = [
            [
                "id" => 1,
                "title"  => "khoa 1",
                "image"  => "/images/course/Bi-mat-ads-hien-thi-cho-affiliate.png",
                "price"  => 500
            ],
            [
                "id" => 2,
                "title"  => "khoa 2",
                "image"  => null,
                "price"  => 500
            ],
            [
                "id" => 3,
                "title"  => "khoa 3",
                "image"  => "/images/course/Digital-Marketing-1.jpg",
                "price"  => 500
            ],
            [
                "id" => 4,
                "title"  => "khoa 4",
                "image"  => "/images/course/Khoa-hoc-Futur-Creator-Moi-nhat-2024.png",
                "price"  => 500
            ],
            [
                "id" => 5,
                "title"  => "khoa 5",
                "image"  => "/images/course/Khoa-Hoc-Lam-VIDEO-Quang-Cao-TikTok-Cung-HieuCB.png",
                "price"  => 500
            ],
            [
                "id" => 6,
                "title"  => "khoa 6",
                "image"  => "/images/course/Khoa-Hoc-To-Hai-Doan-YouTube-Business-Model-chokhoahoc.png",
                "price"  => 500
            ],
            [
                "id" => 7,
                "title"  => "khoa 7",
                "image"  => "/images/course/van-the-mmo.png",
                "price"  => 500
            ],
            [
                "id" => 8,
                "title"  => "khoa 8",
                "image"  => "/images/course/Youtube-Business-Success-5.png",
                "price"  => 500
            ],
        ];
        echo $this->returnSuccess(["latestCourse" => $latestCourse, "popularCourse" => $latestCourse]);
    }
}