<?php

if(isset($_POST['target']) and $_POST['target'] != ""){
    switch($_POST['target']){

        /* quand il faut que je recupere une actualité ou toutes les actualites */
        case 'get_actu':
            require_once ('actualite.class.php');
            $actu = new Actualite();
            if(isset($_POST['idactualite']) and $_POST['idactualite'] != ""){
                echo $actu->getOne($_POST['idactualite']);
            }else{
                echo $actu->getAll();
            }
            break;
        


        default:
            echo "404";
            break; 
    }
}else{
    echo "404";
}



