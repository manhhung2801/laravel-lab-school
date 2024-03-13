<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    public function index(){
        $sinhvien = [
            [
                'ten' => 'Nguyễn Văn A',
                'diem_toan' => 8.5,
                'diem_van' => 9.0,
                'diem_trung_binh' => 0,
                'xep_loai' => ''

            ],
            [
                'ten' => 'Nguyễn Văn B',
                'diem_toan' => 7.5,
                'diem_van' => 7.0,
                'diem_trung_binh' => 0,
                'xep_loai' => ''

            ],
            [
                'ten' => 'Nguyễn Văn C',
                'diem_toan' => 5.5,
                'diem_van' => 5.0,
                'diem_trung_binh' => 0,
                'xep_loai' => ''

            ]
            ];

        return view('sinhvien', ['sinhvien' => $sinhvien]);
    }
}
