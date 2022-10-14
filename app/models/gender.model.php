<?php

class GenderModel
{

    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_gamestp;charset=utf8', 'root', '');
    }
    public function getAllGender()
    {
        $query = $this->db->prepare("SELECT *FROM gender");
        $query->execute();
        $genders = $query->fetchAll(PDO::FETCH_OBJ);
        return $genders;
    }
    public function gamesbycategories($id_genero)
    {
        $query = $this->db->prepare('SELECT `id`, `Nombre`, `Descripcion`, `Anio`, `id_genero` FROM `games` WHERE id_genero=?');
        $query->execute([$id_genero]);
        $gamesBy = $query->fetchAll(PDO::FETCH_OBJ);
        return $gamesBy;
    }
    public function addGender($nombregenero)
    {
        $query = $this->db->prepare("INSERT INTO `gender`(`Nombregenero`) VALUES (?)");
        $query->execute([$nombregenero]);
    }
    public function formeditgender($id)
    {
        $query = $this->db->prepare('SELECT * FROM gender WHERE id_genero=?');
        $query->execute([$id]);
        $genderedit = $query->fetch(PDO::FETCH_OBJ);
        return $genderedit;
    }
    public function gendereditar($gendertitulo, $id_genero)
    {
        $query = $this->db->prepare("UPDATE `gender` SET Nombregenero=? WHERE id_genero=?");
        $query->execute([$gendertitulo, $id_genero]);
        header("Location: " . BASE_URL . 'home');
    }
    public function GenderDelete($id_genero)
    {

        $query = $this->db->prepare('DELETE FROM `gender`WHERE id_genero = ?');
        $query->execute([$id_genero]);
    }
}
