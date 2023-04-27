<?php

class Room extends Controller {
    public function index()
    {
        $data['judul'] = 'Room';
        $this->view('templates/header', $data);
        $this->view('room/index');
        $this->view('templates/footer');
    }
}