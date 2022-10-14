<?php
require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';

class GamesView
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
    }
    function showGames($games)
    {

        $this->smarty->assign('games', $games);
        $this->smarty->display('gameslist.tpl');
    }
    function showGender($genders)
    {

        $this->smarty->assign('genders', $genders);
        $this->smarty->display('genderlist.tpl');
    }
    function showDetailGame($games)
    {
        $this->smarty->assign('games', $games);
        $this->smarty->display('infogame.tpl');
    }
    function showGenderForm($genders)
    {
        $this->smarty->assign('genders', $genders);
        $this->smarty->display('formAddGame.tpl');
    }
    function showGamesBy($gamesBy)
    {
        $this->smarty->assign('gamesBy', $gamesBy);
        $this->smarty->display('gamesbycategorieslist.tpl');
    }
    function showformedit($gameedit)
    {
        $this->smarty->assign('gameedit', $gameedit);

        $this->smarty->display('formeditgame.tpl');
    }
    function showgenderformedit($genderedit)
    {
        $this->smarty->assign('genderedit', $genderedit);
        $this->smarty->display('formeditgender.tpl');
    }
    function errorgenderdelete()
    {
        $this->smarty->display('errorgender.tpl');
    }
}
