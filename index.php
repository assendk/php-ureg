<?php


if ($_SERVER['REQUEST_URI'] == '/public/404') {
    include '404.php';
} else {
    include(__DIR__."/public/index.php");
}


//if (isset($_GET['page'])) {
//    $requested_page = $_GET['page'];
//}
//else {
//    $requested_page = 'home';
//}
//// a better way would be to put this into an array, but I think a switch is easier to read for this example
//switch($requested_page) {
//    case "home":
//        include(__DIR__."/public/home.php");
//        break;
//    default:
//        include(__DIR__."/public/404.php");
//}