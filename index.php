<?php
session_start();

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    //$endereco_dao = dirname(__FILE__) . '/DAO/';

        //echo $endereco_dao;

        //echo PATH_DAO;

    include 'config.php';

    include 'Autoload.php';

    include 'rotas.php';

    //var_dump($_SESSION);