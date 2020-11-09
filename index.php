<?php

session_start();

require_once('controller/controller.php');
require_once('controller/adminController.php');
require_once('model/model.php');
require_once('model/modelArtworks.php');
require_once('model/modelNews.php');
require_once('model/modelMusics.php');

if(!isset($_GET['action'])){
    home();
    exit();
}

switch($_GET['action']) {

    case "musics":
        musics();
    break;

    case "artworks":
        artworks();
    break;

    case "news":
        news();
    break;

    case "aboutme":
        about();
    break;

    case "labels":
        labels();
    break;

    case "contactme":
        contact();
    break;

    case "admin":
        homeManager();
    break;

    case "artworksMan":
        artworksManager();
    break;

    case "musicsMan":
        musicsManager();
    break;

    case "newsMan":
        newsManager();
    break;

    case "logout":
        logout();
    break;

    case "deleteNew":
        deleteNewManager();
    break;

    case "editNew":
        editNewManager();
    break;

    case "deleteArtwork":
        deleteArtworkManager();
    break;

    case "editArtwork":
        editArtworkManager();
    break;

    case "deleteMusic":
        deleteMusicManager();
    break;

    case "editMusic":
        editMusicManager();
    break;

    default:
        error404();

}
