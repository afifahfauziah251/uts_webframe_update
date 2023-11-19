<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Krs 
{
    private static $krs_posts = [
        [
            "KodeMatkul" => "MKB0-3133",
             "NamaMatkul" => "Testing dan Implementasi Sistem",
             "SKS" => "2",
             "Semester" => "5"
         ],
         [
            "KodeMatkul" => "MKB0-3105",
             "NamaMatkul" => "Bisnis Teknologi Informasi",
             "SKS" => "2",
             "Semester" => "5"
         ],
         [
            "KodeMatkul" => "MKB0-3108",
             "NamaMatkul" => "Seminar Pra Tugas AKhir",
             "SKS" => "1",
             "Semester" => "5"
         ],
         [
            "KodeMatkul" => "MKB0-3166",
             "NamaMatkul" => "Gamifikasi",
             "SKS" => "2",
             "Semester" => "5"
         ],
         [
            "KodeMatkul" => "MKB0-3107",
             "NamaMatkul" => "Praktek Kerja Teknologi Informasi",
             "SKS" => "4",
             "Semester" => "5"
         ],
         [
            "KodeMatkul" => "MKB0-3115",
             "NamaMatkul" => "User Interface Design",
             "SKS" => "2",
             "Semester" => "5"
         ],
         [
            "KodeMatkul" => "MKB0-3110",
             "NamaMatkul" => "Manajement Server Web",
             "SKS" => "2",
             "Semester" => "5"
         ],
         [
            "KodeMatkul" => "MKB0-3117",
             "NamaMatkul" => "Pemrograman Web Framework 2",
             "SKS" => "2",
             "Semester" => "5"
         ],
         [
            "KodeMatkul" => "MKB0-3118",
             "NamaMatkul" => "Praktikum Pemrograman Web Framework 2",
             "SKS" => "2",
             "Semester" => "5"
         ]
    ];

    public static function all()
    {
        return self::$krs_posts;
    }
}
