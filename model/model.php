<?php

function dbConnect() {    
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=vektam_music;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    return $bdd;
}

function isLogged() {
    return isset($_SESSION['auth']);
}

function auth() {
    if(isset($_POST['login']) && isset($_POST['password'])){
        if($_POST['login'] == 'admin' && $_POST['password'] == 'admin'){
            $_SESSION['auth'] = true;
            $_SESSION['user'] = 'admin';
            $_SESSION['error'] = [];
            return true;
        }
    }
    return false;
}

function logout() {
    session_destroy();
    header('location: index.php');
    exit();
}

