<?php

$link = mysqli_connect( "localhost",  'root',  '', 'jdm');

$result = mysqli_query($link, "SELECT * FROM `news`");
$rows = mysqli_num_rows($result);

