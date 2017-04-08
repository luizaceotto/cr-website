<?php

    if(isset($_GET['p'])){
        $page = $_GET['p'];
    } else {
        $page = "index";
    }

$home =  "menu-item";
$empresa = "menu-item"; 
$galeria = "menu-item"; 
$contato = "menu-item";


switch ($page){
        
    case "index":
        $home = "menu-item current-menu-item";
        break;
    case "empresa":
        $empresa = "menu-item current-menu-item";
        break;
    case "galeria":
        
        $galeria = "menu-item current-menu-item";
        break;
    case "contato":
        
        $contato = "menu-item current-menu-item";
        break;
    default:
        $page = "index";
        $home = "menu-item current-menu-item";
        break;
}

?>