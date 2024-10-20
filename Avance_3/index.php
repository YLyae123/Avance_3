<?php
require_once('Controlador/IndexController.php');
if(isset($_GET['i'])):
    $metodo = $_GET['i'];
    if(method_exists('IndexController',$metodo)):
        IndexController::{$metodo}();
    endif;
else:
    IndexController::index();
endif;
?>