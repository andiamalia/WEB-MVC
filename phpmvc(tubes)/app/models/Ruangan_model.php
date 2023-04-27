<?php

class Ruangan_model {
    
    private $table = 'mst_ruangan';
    private $db ;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllRuangan(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function tambahDataRuangan($id_ruangan, $nama_ruangan, $kuota_ruangan,  $status_ruangan){
        $query = "INSERT INTO mst_ruangan VALUES (:id_ruangan, :nama_ruangan, :kuota_ruangan, :status_ruangan)";
        $this->db->query($query);
        $this->db->bind('id_ruangan', $id_ruangan);
        $this->db->bind('nama_ruangan', $nama_ruangan);
        $this->db->bind('kuota_ruangan', $kuota_ruangan);
        $this->db->bind('status_ruangan', $status_ruangan);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapus($id_ruangan)
    {
        $query = 'DELETE FROM mst_ruangan WHERE id_ruangan = :id_ruangan';
        $this->db->query($query);
        $this->db->bind('id_ruangan', $id_ruangan);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function edit($id_ruangan, $nama_ruangan, $kuota_ruangan,  $status_ruangan){
        $query = 'UPDATE mst_ruangan SET nama_ruangan = :nama_ruangan, kuota_ruangan = :kuota_ruangan, status_ruangan = :status_ruangan WHERE id_ruangan = :id_ruangan';
        $this->db->query($query);
        $this->db->bind('id_ruangan', $id_ruangan);
        $this->db->bind('nama_ruangan', $nama_ruangan);
        $this->db->bind('kuota_ruangan', $kuota_ruangan);
        $this->db->bind('status_ruangan', $status_ruangan);
        $this->db->execute();
        return $this->db->rowCount();
    }
}