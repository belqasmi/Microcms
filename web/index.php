<?php
// Data access
$bdd = new PDO('mysql:host=localhost;dbname=microcms;charset=utf8', 'microcms_user', 'secret');
$articles = $bdd->query('select * from t_article order by art_id desc');
?>

<?php

require 'model.php';
$articles = getArticles();
require 'view.php';
?>
