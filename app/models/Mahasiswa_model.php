<?php

class Mahasiswa_model {
    private $mhs= [
    [
        "id" => 1,
        "nama" => "John Doe",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "id" => 2,
        "nama" => "Jane Smith",
        "jurusan" => "Sistem Informasi"
    ],
    [
        "id" => 3,
        "nama" => "Alice Johnson",
        "jurusan" => "Teknik Komputer"
    ]
    ];


    public function getAllMahasiswa() {
        return $this->mhs;
    }

}