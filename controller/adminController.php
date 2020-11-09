<?php

function homeManager() {
    if(isLogged() || auth()) {
        require('view/admin/homeManagerView.php');
        exit();
    }
    require('view/admin/loginView.php');
}

function artworksManager() {
    if(isLogged()){
        $artworks = getAllArtworks();
        require('view/admin/artworksManagerView.php');
        exit();
    }
    require('view/admin/loginView.php');
}

function musicsManager() {
    if(isLogged()){
        $musics = getAllMusics();
        require('view/admin/MusicsManagerView.php');
        exit();
    }
    require('view/admin/loginView.php');
}

function newsManager() {
    if(isLogged()){
        $news = getAllNews();
        require('view/admin/newsManagerView.php');
        exit();
    }
    require('view/admin/loginView.php');
}

function deleteNewManager(){
    if(isLogged()){
        if(isset($_GET['id'])){
            deleteNew(htmlentities($_GET['id']));
        } else {
            $_SESSION['error'][] = 'Delete new failed';
        }
        header('location: index.php?action=newsMan');
        exit();
    }
    require('view/admin/loginView.php');
}

function editNewManager() {
    if(isLogged()){
        if(isset($_GET['id'])){
            $id = htmlentities($_GET['id']);
            if(isset($_GET['post']) && $_GET['post'] == 'true'){
                if($id >= 0){
                    $title = htmlentities($_POST['title']);
                    $content = htmlentities($_POST['content']);
                    if($id == 0){
                        addNew($title, $content);
                    } else {
                        editNew($id, $title, $content);
                    }
                    header('location: index.php?action=newsMan');
                    exit();
                }
            } else {
                if($id >= 0){      
                    if($id != 0){
                        $new = getNew($id);
                    }
                    require('view/admin/editNewManagerView.php');
                    exit();
                }  
            }
            
        }
        $_SESSION['error'][] = 'edit new failed';
        header('location: index.php?action=newsMan');
        exit();
    }
    require('view/admin/loginView.php');
}

function deleteArtworkManager(){
    if(isLogged()){
        if(isset($_GET['id'])){
            deleteArtwork(htmlentities($_GET['id']));
        } else {
            $_SESSION['error'][] = 'Delete Artwork failed';
        }
        header('location: index.php?action=artworksMan');
        exit();
    }
    require('view/admin/loginView.php');
}

function editArtworkManager() {
    if(isLogged()){
        if(isset($_GET['id'])){
            $id = htmlentities($_GET['id']);
            if(isset($_GET['post']) && $_GET['post'] == 'true'){
                if($id >= 0){
                    $content = htmlentities($_POST['content']);
                    if($id == 0){
                        addArtwork($content);
                    } else {
                        editArtwork($id, $content);
                    }
                    header('location: index.php?action=artworksMan');
                    exit();
                }
            } else {
                if($id >= 0){      
                    if($id != 0){
                        $artwork = getArtwork($id);
                    }
                    require('view/admin/editArtworkManagerView.php');
                    exit();
                }  
            }
            
        }
        $_SESSION['error'][] = 'Artwork new failed';
        header('location: index.php?action=artworksMan');
        exit();
    }
    require('view/admin/loginView.php');
}

function deleteMusicManager(){
    if(isLogged()){
        if(isset($_GET['id'])){
            deleteMusic(htmlentities($_GET['id']));
        } else {
            $_SESSION['error'][] = 'Delete Music failed';
        }
        header('location: index.php?action=musicsMan');
        exit();
    }
    require('view/admin/loginView.php');
}

function editMusicManager() {
    if(isLogged()){
        if(isset($_GET['id'])){
            $id = htmlentities($_GET['id']);
            if(isset($_GET['post']) && $_GET['post'] == 'true'){
                if($id >= 0){
                    $title = htmlentities($_POST['title']);
                    $authors = htmlentities($_POST['authors']);
                    $created_at = htmlentities($_POST['created_at']);
                    $credits = htmlentities($_POST['credits']);
                    if($id == 0){
                        addMusic($title, $authors, $created_at, $credits);
                    } else {
                        editMusic($id, $title, $authors, $created_at, $credits);
                    }
                    header('location: index.php?action=musicsMan');
                    exit();
                }
            } else {
                if($id >= 0){      
                    if($id != 0){
                        $music = getMusic($id);
                    }
                    require('view/admin/editMusicManagerView.php');
                    exit();
                }  
            }
            
        }
        $_SESSION['error'][] = 'Music new failed';
        header('location: index.php?action=musicsMan');
        exit();
    }
    require('view/admin/loginView.php');
}