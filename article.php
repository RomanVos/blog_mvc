<?php
require_once 'database.php';
require_once 'models/functions.php';

$link = db_connect();
$id_article = articles_get($link, $GET['id']);
include 'views/article.php';