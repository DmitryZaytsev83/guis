<?php
function printIndexPage() {
    echo file_get_contents("html/head.html");
    echo file_get_contents("html/header.html");
    echo file_get_contents("html/nav.html");
    echo file_get_contents("html/promotion.html");
    echo file_get_contents("html/end.html");
}

printIndexPage();
/**
 * Created by PhpStorm.
 * User: Dmitry Zaytsev
 * Date: 29.11.2018
 * Time: 14:19
 */