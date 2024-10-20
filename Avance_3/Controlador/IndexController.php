<?php
include_once("Modelo/indexModel.php");
class IndexController{
    private  $indexModel;
    public function __construct(){
        $this->indexModel = new IndexModel();
    }
    public static function index(){
        require_once("Vista/index.php");
    }
}
?>