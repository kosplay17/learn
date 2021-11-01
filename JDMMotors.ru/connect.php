<?php
/**
 * Created by PhpStorm.
 * User: logvi
 * Date: 19.05.2019
 * Time: 23:18
 */
require_once 'bd_connect.php';
$link = mysqli_connect($server, $user, $pass, $bd) or die("Ошибка" . mysqli_error($link));
?>

<script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
