<?php

class Ruangan extends Controller{
    public function index()
    {
        $data['judul'] = 'Daftar Ruangan';
        $data['ruangan'] = $this->model('Ruangan_model')->getAllRuangan();
        $this->view('templates/header');
        $this->view('templates/dashboard');
        $this->view('ruangan/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $id_ruangan = $_POST['id_ruangan'];
        $nama_ruangan = $_POST['nama_ruangan'];
        $kuota_ruangan = $_POST['kuota_ruangan'];
        $status_ruangan = $_POST['status_ruangan'];
        // echo $nama_barang;
        // echo $jml_stok;
        // echo $denda_rusak;
        $this->model('Ruangan_model')->tambahDataRuangan($id_ruangan, $nama_ruangan, $kuota_ruangan,  $status_ruangan);
        header('location: ' . BASEURL . '/ruangan');

        // if( $this->model('Ruangan_model')->tambahDataRuangan($_POST) > 0){
        //     header('location: ' . BASEURL . '/alat');
        // }
    }

    public function hapus($id_ruangan)
    {
        $this->model('Ruangan_model')->hapus($id_ruangan);
        echo $id_ruangan;
        header('location: ' . BASEURL . '/ruangan');

    }
    
    public function edit($id_ruangan){
        $id_ruangan = $_POST['id_ruangan'];
        $nama_ruangan = $_POST['nama_ruangan'];
        $kuota_ruangan = $_POST['kuota_ruangan'];
        $status_ruangan = $_POST['status_ruangan'];
        
        $this->model('Ruangan_model')->edit($id_ruangan, $nama_ruangan, $kuota_ruangan,  $status_ruangan);
        
        // var_dump($_POST['id_barang']);
        header('location: ' . BASEURL . '/ruangan');
    }
}