<?php

class User_model {
    private $nama = 'Enjel';
    private $hobby = 'coding';
    private $umur = 20;

    public function getUser() {
        return [
            'nama' => $this->nama,
            'hobby' => $this->hobby,
            'umur' => $this->umur
        ];
    }
}
