<?php   

class About{
    public function index($nama = 'John Doe', $hobby = 'coding') {
        echo 'Halo, saya mahasiswa bernama ' . $nama . ' dan saya suka ' . $hobby;
    }

    public function page() {
        echo 'About/page';
    }
}