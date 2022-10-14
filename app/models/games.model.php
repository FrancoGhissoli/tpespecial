<?php

class GamesModel
{

    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_gamestp;charset=utf8', 'root', '');
    }

    public function getAllGames()
    {
        $query = $this->db->prepare("SELECT games.*, gender.Nombregenero as gender FROM games JOIN gender ON games.id_genero = gender.id_genero");
        $query->execute();
        $games = $query->fetchAll(PDO::FETCH_OBJ);

        return $games;
    }
    public function getDetailGame($id)
    {
        $query = $this->db->prepare("SELECT games.*, gender.Nombregenero as gender FROM games JOIN gender ON games.id_genero = gender.id_genero WHERE id=?");
        $query->execute([$id]);
        $games = $query->fetch(PDO::FETCH_OBJ);
        return $games;
    }
    public function Delete($id)
    {
        $query = $this->db->prepare('DELETE FROM games WHERE id = ?');
        $query->execute([$id]);
    }
    public function insertGame($titulo, $descripcion, $anio, $id_genero)
    {
        $query = $this->db->prepare("INSERT INTO `games`(`Nombre`, `Descripcion`, `Anio`, `id_genero`) VALUES (?, ?, ?, ?)");
        $query->execute([$titulo, $descripcion, $anio, $id_genero]);

        return $this->db->lastInsertId();
    }
    public function formedit($id)
    {
        $query = $this->db->prepare('SELECT * FROM games WHERE id=?');
        $query->execute([$id]);
        $gameedit = $query->fetch(PDO::FETCH_OBJ);
        return $gameedit;
    }
    public function gameedit($ntitulo, $ndescripcion, $nanio, $id)
    {
        $query = $this->db->prepare("UPDATE `games` SET Nombre=?, Descripcion=?, Anio=? WHERE id=?");
        $query->execute([$ntitulo, $ndescripcion, $nanio, $id]);
        header("Location: " . BASE_URL . 'home');
    }
}
