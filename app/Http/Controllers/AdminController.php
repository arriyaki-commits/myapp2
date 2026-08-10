<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function blog2()
    {
        $blogs = [
            [
                'title' => 'บทความที่ 1',
                'content' => 'เนื้อหาบทความที่ 1',
                'statuus' => true,
            ],

            ['title' => 'บทความที่ 2', 'content' => 'เนื้อหาบทความที่ 2', 'statuus' => true],

            ['title' => 'บทความที่ 3', 'content' => 'เนื้อหาบทความที่ 3', 'statuus' => false],
        ];

        return view('blogs', compact('blogs'));
    }

    function blogs()
    {
        $blogs = [
            [
                'title' => 'บทความที่ 1',
                'content' => 'เนื้อหาบทความที่ 1',
                'statuus' => true,
            ],

            ['title' => 'บทความที่ 2', 
            'content' => 'เนื้อหาบทความที่ 2', 
            'statuus' => true],

            ['title' => 'บทความที่ 3', 
            'content' => 'เนื้อหาบทความที่ 3', 
            'statuus' => true],

            ['title' => 'บทความที่ 4', 
            'content' => 'เนื้อหาบทความที่ 4', 
            'statuus' => false],

            ['title' => 'บทความที่ 5', 
            'content' => 'เนื้อหาบทความที่ 5', 
            'statuus' => false],
        ];
        return view('blogs', compact('blogs'));
    }
    function abouts()
    {
        $name = 'Arriya';
        $date = '6 กรกฎาคม 2026';
        return view('abouts', compact('name', 'date'));
    }
    function create()
    {
        return view('form');
    }
    function insert (Request $request)
    {
        $request->validate([
            'serial_number' => 'required|regex:/^[A-Z0-9]{8,12}$/',
            'email' => 'required|email',
            'problem' => 'required|min:10',
            'priority' => 'required',
        ],[
            'serial_number.required' => 'กรุณากรอกรหัสสินค้า',
            'serial_number.regex' => 'รหัสสินค้าต้องเป็นตัวอักษรพิมพ์ใหญ่และตัวเลข 8-12 ตัว',
            'email.required' => 'กรุณากรอกอีเมลผู้ติดต่อ',
            'email.email' => 'รูปแบบอีเมลไม่ถูกต้อง',
            'problem.required' => 'กรุณากรอกอาการชำรุด',
            'problem.min' => 'อาการชำรุดต้องมีอย่างน้อย 10 ตัวอักษร',
            'priority.required' => 'กรุณาเลือกระดับความเร่งด่วน',
        ]
    );
    }
}
