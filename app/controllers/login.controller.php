<?php
require_once './app/models/login.model.php';
require_once './app/views/login.views.php';

class LoginController
{
    private $view;
    private $model;

    public function __construct()
    {
        $this->model = new LoginModel();
        $this->view = new loginView();
    }
    public function showLogin()
    {
        $this->view->showLoginform();
    }
    public function loginValidate()
    {
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        $usuario = $this->model->getuserByemail($correo);
        if ($usuario && password_verify($contraseña, $usuario->password)) {
            session_start();
            $_SESSION['USER_ID'] = $usuario->id;
            $_SESSION['USER_EMAIL'] = $usuario->email;
            $_SESSION['IS_LOGGED'] = true;


            header("Location: " . BASE_URL);
        } else {
            $this->view->showLoginform("Usuario invalido");
        }
    }
    public function logoutuser()
    {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
}
