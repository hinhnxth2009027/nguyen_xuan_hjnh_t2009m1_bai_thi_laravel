<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{





    public function run()
    {
        $bookname = array(
            "Lập trình viên (Developer)",
            "Kỹ sư thiết kế phần mềm (Junior Software Engineer)",
            "Kiến trúc sư phần mềm (Software Architect)",
            "Kỹ sư quản trị mạng",
            "Kỹ sư an toàn thông tin",
            "Nhân viên hỗ trợ kỹ thuật",
            "Quản lý CNTT",
            "Quản trị Website",
            "Quản trị cơ sở dữ liệu",
            "Kinh doanh kỹ thuật số",
            "Giảng viên chuyên ngành CNTT",
            "AI (trí thông minh nhân tạo)",
            "IoT (internet of thing)",
            "Chuyên viên dự án (Project Management)",
            "Kỹ sư cầu nối (Bridge System Engineer)",
        );
        $bookyear = array(
            "2005",
            "2003",
            "2008",
            "2006",
            "2007",
            "2004",
            "2002",
            "2001",
            "2000",
            "2010",
            "1999",
        );


        for ($i = 0; $i < 100; $i++) {
            Book::create([
                'id' => $i+1,
                'authorid'=>random_int(10000,99999),
                'title'=>$bookname[random_int(0,sizeof($bookname)-1)],
                'ISBN'=>random_int(10,99).'-'.random_int(100,999).'-'.random_int(10,99),
                'pub_year'=>$bookyear[random_int(0,sizeof($bookyear)-1)],
                'available'=>1,
            ]);
        }


    }
}
