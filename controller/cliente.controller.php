<?php
// require_once "model/Cliente.php";

class ClienteController{

    // private $model;

    public function __construct(){
        // $this->model =new Cliente();
    }

    public function Index(){
        require_once "view/layout/head.php";
        require_once "view/pagina_principal.php";
        require_once "view/layout/foot.php";

    }



}



?>