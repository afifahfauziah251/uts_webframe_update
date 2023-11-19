<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datamahasiswa 
{
    private static $data_posts = [
        [
            "NIM" => "21.31.0002",
            "Nama" => "Bayu Aditya Saputra",
            "Jurusan" => "D3-Sistem Informasi",
        ],
        [
            "NIM" => "21.31.0001",
            "Nama" => "Anisa Putri Tridancia Tuka",
            "Jurusan" => "D3-Sistem Informasi",
        ],
        [
            "NIM" => "21.31.0003",
            "Nama" => "Fila Anis Ani Mahmuda",
            "Jurusan" => "D3-Sistem Informasi",
        ],
        [
            "NIM" => "21.31.0004",
            "Nama" => "Afifah Fauziah",
            "Jurusan" => "D3-Sistem Informasi",
        ],
        [
            "NIM" => "21.31.0011",
            "Nama" => "Damaysah Kiki Pratiwi",
            "Jurusan" => "D3-Sistem Informasi",
        ],
        // Tambahkan data mahasiswa lainnya...
    ];

    private static $krs_posts = [
        "21.31.0001" => [
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
                "NamaMatkul" => "Seminar Pra Tugas Akhir",
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
                "NamaMatkul" => "Praktik Kerja Teknologi Informasi",
                "SKS" => "4",
                "Semester" => "5"
            ],
            [
                "KodeMatkul" => "MKB2-3115",
                "NamaMatkul" => "User Interface Design",
                "SKS" => "2",
                "Semester" => "5"
            ],
            [
                "KodeMatkul" => "MKB2-3110",
                "NamaMatkul" => "Manajement Server Web",
                "SKS" => "2",
                "Semester" => "5"
            ],
            [
                "KodeMatkul" => "MKB2-3117",
                "NamaMatkul" => "Pemrograman Web Framework 2",
                "SKS" => "2",
                "Semester" => "5"
            ],
            [
                "KodeMatkul" => "MKB2-3118",
                "NamaMatkul" => "Praktikum Pemrograman Web Framework 2",
                "SKS" => "2",
                "Semester" => "5"
            ]
            
        ],
        "21.31.0002" => [
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
                "NamaMatkul" => "Seminar Pra Tugas Akhir",
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
                "NamaMatkul" => "Praktik Kerja Teknologi Informasi",
                "SKS" => "4",
                "Semester" => "5"
            ],
            [
                "KodeMatkul" => "MKB2-3115",
                "NamaMatkul" => "User Interface Design",
                "SKS" => "2",
                "Semester" => "5"
            ],
            [
                "KodeMatkul" => "MKB2-3110",
                "NamaMatkul" => "Manajement Server Web",
                "SKS" => "2",
                "Semester" => "5"
            ],
            [
                "KodeMatkul" => "MKB2-3117",
                "NamaMatkul" => "Pemrograman Web Framework 2",
                "SKS" => "2",
                "Semester" => "5"
            ],
            [
                "KodeMatkul" => "MKB2-3118",
                "NamaMatkul" => "Praktikum Pemrograman Web Framework 2",
                "SKS" => "2",
                "Semester" => "5"
            ]
            
        ],
        "21.31.0003" => [
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
                "NamaMatkul" => "Seminar Pra Tugas Akhir",
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
                "NamaMatkul" => "Praktik Kerja Teknologi Informasi",
                "SKS" => "4",
                "Semester" => "5"
            ],
            [
                "KodeMatkul" => "MKB2-3115",
                "NamaMatkul" => "User Interface Design",
                "SKS" => "2",
                "Semester" => "5"
            ],
            [
                "KodeMatkul" => "MKB2-3110",
                "NamaMatkul" => "Manajement Server Web",
                "SKS" => "2",
                "Semester" => "5"
            ],
            [
                "KodeMatkul" => "MKB2-3117",
                "NamaMatkul" => "Pemrograman Web Framework 2",
                "SKS" => "2",
                "Semester" => "5"
            ],
            [
                "KodeMatkul" => "MKB2-3118",
                "NamaMatkul" => "Praktikum Pemrograman Web Framework 2",
                "SKS" => "2",
                "Semester" => "5"
            ]
            
        ],
        "21.31.0004" => [
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
                "NamaMatkul" => "Seminar Pra Tugas Akhir",
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
                "NamaMatkul" => "Praktik Kerja Teknologi Informasi",
                "SKS" => "4",
                "Semester" => "5"
            ],
            [
                "KodeMatkul" => "MKB2-3115",
                "NamaMatkul" => "User Interface Design",
                "SKS" => "2",
                "Semester" => "5"
            ],
            [
                "KodeMatkul" => "MKB2-3110",
                "NamaMatkul" => "Manajement Server Web",
                "SKS" => "2",
                "Semester" => "5"
            ],
            [
                "KodeMatkul" => "MKB2-3117",
                "NamaMatkul" => "Pemrograman Web Framework 2",
                "SKS" => "2",
                "Semester" => "5"
            ],
            [
                "KodeMatkul" => "MKB2-3118",
                "NamaMatkul" => "Praktikum Pemrograman Web Framework 2",
                "SKS" => "2",
                "Semester" => "5"
            ]
            
        ],
        "21.31.0011" => [
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
                "NamaMatkul" => "Seminar Pra Tugas Akhir",
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
                "NamaMatkul" => "Praktik Kerja Teknologi Informasi",
                "SKS" => "4",
                "Semester" => "5"
            ],
            [
                "KodeMatkul" => "MKB2-3115",
                "NamaMatkul" => "User Interface Design",
                "SKS" => "2",
                "Semester" => "5"
            ],
            [
                "KodeMatkul" => "MKB2-3110",
                "NamaMatkul" => "Manajement Server Web",
                "SKS" => "2",
                "Semester" => "5"
            ],
            [
                "KodeMatkul" => "MKB2-3117",
                "NamaMatkul" => "Pemrograman Web Framework 2",
                "SKS" => "2",
                "Semester" => "5"
            ],
            [
                "KodeMatkul" => "MKB2-3118",
                "NamaMatkul" => "Praktikum Pemrograman Web Framework 2",
                "SKS" => "2",
                "Semester" => "5"
            ]
            
        ],

    ];

    public static function getDataPosts()
    {
        return self::$data_posts;
    }

    public static function getKrsPosts()
    {
        return self::$krs_posts;
    }

    public static function getDataByNIM($nim)
    {
        $mahasiswa = collect(self::$data_posts)->firstWhere('NIM', $nim);
        $krs = isset(self::$krs_posts[$nim]) ? self::$krs_posts[$nim] : [];

        return [
            'mahasiswa' => $mahasiswa,
            'krs' => $krs,
        ];
    }
}
