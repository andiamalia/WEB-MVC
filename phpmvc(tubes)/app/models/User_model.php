<?php

class User_model {
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser($email, $password, $sebagai)
    {
        $this->db->query("SELECT * FROM mst_user WHERE email = :email AND password = :password AND role = :sebagai");
        $this->db->bind('email', $email);
        $this->db->bind('password', $password);
        $this->db->bind('sebagai', $sebagai);
        return $this->db->resultSet();
    }
}
?>