<?php

function about() {
    require('view/aboutView.php');
}

function artworks() {
    $artworks = getAllArtworks();
    require('view/artworksView.php');
}

function home() {
    require('view/indexView.php');
}

function musics() {
    $musics = getAllMusics();
    require('view/musicsview.php');
}

function news() {
    $posts = getAllNews();
    require('view/newsView.php');
}

function error404() {
    require('view/error404View.php');
}

function labels() {
    require('view/labelsView.php');
}

function contact() {
    require('view/contactView.php');
}