<?php
require_once './app/models/games.model.php';
require_once './app/models/gender.model.php';
require_once './app/views/games.view.php';
require_once './app/helpers/login.helper.php';

class GamesController
{
    private $model;
    private $view;

    public function __construct()
    {

        $this->chequeo = new LoginHelper();
        $this->model = new GamesModel;
        $this->model2 = new GenderModel;
        $this->view = new GamesView();
    }

    public function showGames()
    {

        $games = $this->model->getAllGames();
        $this->view->showGames($games);
    }


    public function ShowDetailGame($id)
    {
        $games = $this->model->getDetailGame($id);
        $this->view->showDetailGame($games);
    }
    public function DeleteGame($id)
    {
        $this->chequeo->checkLoggedIn();
        $this->model->Delete($id);
        header("Location: " . BASE_URL);
    }
    function AddGame()
    {
        $this->chequeo->checkLoggedIn();
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $anio = $_POST['anio'];
        $id_genero = $_POST['id_genero'];
        $this->model->insertGame($titulo, $descripcion, $anio, $id_genero);
        header("Location: " . BASE_URL);
    }


    function showFormEdit($id)
    {
        $this->chequeo->checkLoggedIn();
        $gameedit = $this->model->formedit($id);
        $this->view->showformedit($gameedit);
    }
    function GameEdit($id)
    {

        $this->chequeo->checkLoggedIn();
        $ntitulo = $_POST['ntitulo'];
        $ndescripcion = $_POST['ndescripcion'];
        $nanio = $_POST['nanio'];

        $this->model->gameedit($ntitulo, $ndescripcion, $nanio, $id);
    }
}
