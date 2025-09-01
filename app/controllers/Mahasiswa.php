<?php

class Mahasiswa extends Controller {
    public function index() {
        $data['title'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer', $data);
    }

    public function tambah() {
        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success', $nama = $_POST['nama']);
            header('Location: ' . BASE_URL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', $nama);
            header('Location: ' . BASE_URL . '/mahasiswa');
            exit;
        }
    }
    
    public function delete($id) {
        $mahasiswa = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success', $nama = $mahasiswa['nama']);
            header('Location: ' . BASE_URL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger', $mahasiswa['nama']);
            header('Location: ' . BASE_URL . '/mahasiswa');
            exit;
        }
    }

    public function getubah() {
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }

    public function ubah(){
        if ($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success', $nama = $_POST['nama']);
            header('Location: ' . BASE_URL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger', $nama);
            header('Location: ' . BASE_URL . '/mahasiswa');
            exit;
        }
    }

    public function cari() {
        $data['title'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
}
