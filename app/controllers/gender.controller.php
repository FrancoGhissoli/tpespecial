<?php
require_once './app/models/games.model.php';
require_once './app/models/gender.model.php';
require_once './app/views/games.view.php';
require_once './app/helpers/login.helper.php';
session_start();
class GenderController
{
    private $model2;
    private $view;

    public function __construct()
    {

        $this->model2 = new GenderModel;
        $this->view = new GamesView();
        $this->chequeo = new LoginHelper();
    }
    public function showGender()
    {
        $genders = $this->model2->getAllGender();
        $this->view->showGender($genders);
    }
    function showGenderForm()
    {
        $genders = $this->model2->getAllGender();
        $this->view->showGenderForm($genders);
    }
    function GetgamesByCategories($id_genero)
    {
        $gamesBy = $this->model2->gamesbycategories($id_genero);
        $this->view->showGamesBy($gamesBy);
    }
    public function addNewgender()
    {

        $this->chequeo->checkLoggedIn();
        $nombregenero = $_POST['nombregenero'];
        $this->model2->addGender($nombregenero);
        header("Location: " . BASE_URL);
    }
    function showGenderFormEdit($id)
    {
        $this->chequeo->checkLoggedIn();
        $genderedit = $this->model2->formeditgender($id);
        $this->view->showgenderformedit($genderedit);
    }
    function GenderEdit($id_genero)
    {
        $this->chequeo->checkLoggedIn();
        $gendertitulo = $_POST['gendertitulo'];
        $this->model2->gendereditar($gendertitulo, $id_genero);
    }
    public function DeleteGender($id)

    {
        $this->chequeo->checkLoggedIn();
        /*pasarlo a gender model*/
        $items = (new GenderModel)->gamesbycategories($id);

        if (count($items) > 0) {
            $this->view->errorgenderdelete();
            //Llamada al view para mostrar el error
        } else { {
                $this->model2->GenderDelete($id);
                header("Location: " . BASE_URL);
                //Llamada al model para borrar la categoría 
            }
        }
    }
}
