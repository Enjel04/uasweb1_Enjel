<?php   

class About extends Controller {
    public function index($nama = 'Jeff Bezos', $hobby = 'coding', $umur = 61) {
        $data['nama'] = $nama;
        $data['hobby'] = $hobby;
        $data['umur'] = $umur;
        $data['title'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer', $data);
    }

    public function page() {
        $data['title'] = 'About Page';
        $this->view('templates/header', $data);
        $this->view('about/page', $data);
        $this->view('templates/footer', $data);
    }
}