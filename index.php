<?php
require_once 'database.php';
require_once 'models/functions.php';

$link = db_connect();
$articles = articles_all($link);

include 'views/articles.php';
