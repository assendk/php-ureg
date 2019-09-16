<?php

include_once('layout/header.php');

if ($_SERVER['REQUEST_URI'] == '/') {
    include (__DIR__.'/home.php');
    }
elseif ($_SERVER['REQUEST_URI'] == '/home'){
    include (__DIR__.'/home.php');
} else {
    include(__DIR__."/404.php");
}

include_once('layout/footer.php');
?>
<h4>front controller</h4>
