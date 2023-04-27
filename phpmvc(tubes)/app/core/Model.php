<?php

class Model {
    protected $table;
    protected $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function GetAll(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function GetById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function Query($query){
        $this->db->query($query);
        return $this->db->single();
    }

    public function Querys($query){
        $this->db->query($query);
        return $this->db->resultSet();
    }
}