<?php

class Dash extends Controller{
    public function index(){
        $data['judul'] = 'Dashboard';
        // $data['alat'] = $this->model('alat_model')->getAllAlat();
        $this->view('templates/header');
        $this->view('templates/dashboard');
        $this->view('Dash/index', $data);
        $this->view('templates/footer');
    }
}