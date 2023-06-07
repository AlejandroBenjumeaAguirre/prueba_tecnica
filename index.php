<?php

require_once 'autoload.php';

if(isset($_GET['controller'])){

    $name_controller = $_GET['controller'].'controller';

}else{

    echo "La pagina que buscas no existe";
    exit();

}

if(class_exist($name_controller)){

    $controller = new $name_controller();

    if(isset($_GET['action']) && method_exists($controller, $_GET['action']) ){
        $action = $_GET['action'];
        $controller->$action();
    }else{
        
        echo "La pagina que buscas no exsite";

    }

}else{

    echo "La pagina que buscas no existe";

}


?>