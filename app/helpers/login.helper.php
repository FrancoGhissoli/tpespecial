<?php

class LoginHelper
{

    public function checkLoggedIn()
    {

        if (!isset($_SESSION['IS_LOGGED'])) {
            header("Location: " . BASE_URL . 'formlogin');
            die();
        }
    }
}
