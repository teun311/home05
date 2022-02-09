<?php

require_once 'vendor/autoload.php';

use App\classes\Word;

//echo '<pre/>';
//print_r($_POST);
//exit();

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['pages'] == 'series')
    {
        include 'pages/series.php';
    }
}
elseif (isset($_POST['btn']))
{
    $word = new Word($_POST);
    $result = $word->index();
    extract($result);
    include 'pages/home.php';
} elseif (isset($_POST['seriesBtn']))
{
    $word = new Word();
    $result = $word->series();
}
