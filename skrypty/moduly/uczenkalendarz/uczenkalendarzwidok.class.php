<?php

class UczenkalendarzWidok extends Widok {

    private $wysw;

    function __construct($kontroler, $url) {
        $this->setTytulstrony("Kalendarium wydarzeń");
        parent:: __construct($kontroler, $url);
        $this->setSzablonglowny('szablonglowny/indexszablon.php');
        $this->setCssdodatkowy('szablonglowny/style/dodatkowe/menu.css');
        $this->setCssdodatkowy('szablonglowny/style/dodatkowe/wyswietlanie.css');
        $this->setCssdodatkowy('szablonglowny/style/dodatkowe/formularz.css');
    }

    function index() {
     
        $this->setWidokmodul("kalendarz");
        $this->szablonglowny();
    }
    function wydarzenieforma(){
        $this->setWidokmodul("wydarzenie");
        $this->szablonglowny();
    }

}

?>