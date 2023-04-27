<?php

class Pinjam extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('pinjam/index');
        $this->view('templates/header');
    }
}