<?php

class Head {
    public static function printHead() {
        return file_get_contents("html/head.html");
    }
}

class Header {
    public static function printHeader() {
        return file_get_contents("html/header.html");
    }
}

class Nav {
    public static function printNav() {
        return file_get_contents("html/nav.html");
    }
}

class Promotion {
    public static function printPromotion() {
        return file_get_contents("html/promotion.html");
    }
}

class Footer {
    public static function printFooter() {
        return file_get_contents("html/footer.html");
    }
}

class EndPage {
    public static function printEndPage() {
        return file_get_contents("html/end.html");
    }
}

class MainPage {
    private $head, $header, $nav, $footer, $end, $promotion;

    function __construct() {
        $this->head = Head::printHead();
        $this->header = Header::printHeader();
        $this->nav = Nav::printNav();
        $this->promotion = Promotion::printPromotion();
        $this->footer = Footer::printFooter();
        $this->end = EndPage::printEndPage();
    }

    private function makeMainWrapper($content) {
        return "<main class='main border-bottom'>" . $content . "</main>";
    }

    public function render() {
        echo $this->head;
        echo $this->header;
        echo $this->nav;
        echo $this->makeMainWrapper($this->promotion);
        echo $this->footer;
        echo $this->end;
    }
}

$page = new MainPage();
$page->render();
/**
 * Created by PhpStorm.
 * User: Dmitry Zaytsev
 * Date: 29.11.2018
 * Time: 14:19
 */