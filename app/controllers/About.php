<?php   

class About extends Controller {
    public function index($nama = 'Enjel', $hobby = 'coding', $umur = 20) {
        $data['nama'] = $nama;
        $data['hobby'] = $hobby;
        $data['umur'] = $umur;
        $this->view('about/index', $data);
    }

    public function page() {
        echo 'About/page';
    }
}