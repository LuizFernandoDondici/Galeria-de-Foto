<?php

namespace Projeto\SistemaLogin\App\Route;

use Projeto\SistemaLogin\App\Controller\PhotoController;

class Route
{

    // Renderiza rotas.
    public function setRoute($path):void
    {
        switch ($path) {
            case null:
                ob_clean();
                PhotoController::gallery();
                break;
            case '/galeria':
                PhotoController::gallery();
                break; 
            case '/salvar-foto':
                PhotoController::savePhoto();
                break;     
            case '/deletar-foto':
                PhotoController::deletePhoto();
                break;     
            case '/error':
                PhotoController::error();
                break;   
            default:
                PhotoController::error();
                break;
        }
    }
}