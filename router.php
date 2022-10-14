<?php
require_once './app/controllers/games.controller.php';
require_once './app/controllers/gender.controller.php';
require_once './app/controllers/login.controller.php';
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$GamesController = new GamesController();
$GenderController = new GenderController();
$LoginController = new LoginController();

// tabla de ruteo
switch ($params[0]) {
    case 'home':
        $GamesController->showGames();
        $GenderController->showGenderForm();
        break;
    case 'gender':
        $GenderController->showGender();
        break;
    case 'detailgame':
        $id = $params[1];
        $GamesController->showDetailGame($id);
        break;
    case 'delete':
        $id = $params[1];
        $GamesController->DeleteGame($id);
        break;
    case 'add':
        $GamesController->AddGame();
        break;
    case 'gamesbycategories':
        $id_genero = $params[1];
        $GenderController->GetgamesByCategories($id_genero);
        break;
    case 'showeditform':
        $id = $params[1];
        $GamesController->showFormEdit($id);
        break;
    case 'editform':
        $id = $params[1];
        $GamesController->GameEdit($id);
        break;
    case 'addgenero':
        $GenderController->addNewgender();
        break;
    case 'showeditgenderform':
        $id = $params[1];
        $GenderController->showGenderFormEdit($id);
        break;
    case 'gendereditform':
        $id_genero = $params[1];
        $GenderController->GenderEdit($id_genero);
        break;

    case 'deletegender':
        $id_genero = $params[1];
        $GenderController->DeleteGender($id_genero);
        break;
    case 'formlogin':
        $LoginController->showLogin();
        break;
    case 'validateuser':
        $LoginController->loginValidate();
        break;
    case 'logoutuser':
        $LoginController->logoutuser();
        break;
    default:
        echo ('404 Page not found');
        break;
}
