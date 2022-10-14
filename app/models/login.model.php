<?php

class LoginModel {
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_gamestp;charset=utf8', 'root', '');
    }

    public function getuserByemail($correo){
        $query = $this->db->prepare("SELECT * FROM user WHERE email = ?");
        $query->execute([$correo]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
}
