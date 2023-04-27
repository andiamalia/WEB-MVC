<?php

class Peminjaman extends Controller{
    public function index(){
        $data['judul'] = 'Peminjaman Ruangan';
        $this->view('templates/header');
        $this->view('templates/dashboard');
        $this->view('peminjaman/index', $data);
        $this->view('templates/footer');
    }
}