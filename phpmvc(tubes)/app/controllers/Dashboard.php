<?php
// session_start();

class Dashboard extends Controller {
    public function index()
    {
        var_dump(isset($_SESSION['nama_user']));
        if(isset($_SESSION['nama_user'])){
            if ($_SESSION['sebagai'] == 'laboran') {
                $data['judul'] = 'Dashboard';
                $this->view('templates/header',$data);
                $this->view('templates/dashboard', $data);
                $this->view('templates/footer');
            } else {
                // kasus ketika yang login itu bukan laboran (mahasiswa);
            }
        } else {
            $message = "Anda Belum Login";
            header("Location:". BASEURL . "/");
            die();
        }
    }
}