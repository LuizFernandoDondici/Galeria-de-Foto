<?php

namespace Projeto\SistemaLogin\App\Controller;

use Projeto\SistemaLogin\App\Model\Photo;
use Projeto\SistemaLogin\App\Model\PhotoRepository;
use Projeto\SistemaLogin\App\Model\PhotoService;

class PhotoController
{

    // Renderiza para pagina gallery.
    public static function gallery():void
    {
        $photoRepository = new PhotoRepository();

        $photos = $photoRepository->findPhotos();

        require __DIR__ . '../../../public/view/gallery.php';
    }

    // Salva foto.
    public static function savePhoto():void
    {
        // Define o diretorio do arquivo.
        $dir = __DIR__ . '../../../public/img/';
        // Identifica a extensão do arquivo.
        $ext = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
        // Concatena nome com a extensão. 
        $name = $_POST['name'].'.'.$ext; 
        // Cria o caminho do arquivo.
        $path = $dir . $name; 
       
        $photo = new Photo($path, $name);

        $photoService = new PhotoService();
        $validate = $photoService->validadePhoto($photo);

        if ($validate != null) {
            
            ob_clean();
            header_remove(); 
            echo json_encode(
                [
                    'success' => 0,
                    'msg' => $validate,
                ]
            );

            exit;
        }  

        $photoRepository = new PhotoRepository();
        $verify = $photoRepository->findPhotoByName($name);
        
        if ($verify != null) {
            
            ob_clean();
            header_remove(); 
            echo json_encode(
                [
                    'success' => 0,
                    'msg' => 'Esse arquivo já existe',
                ]
            );

            exit;

        } 

        $photoRepository->createPhoto($photo);

        // Cria pasta caso não exista.
        if (!file_exists('img\\')) {
            mkdir($dir);
        }

        // Salva arquivo na pasta criada.
        move_uploaded_file($_FILES['img']['tmp_name'], $path); 

        ob_clean();
        header_remove(); 
        echo json_encode(
            [
                'success' => '1'
            ]
        );

        exit;
    }

    // Deleta foto.
    public static function deletePhoto():void
    {
        $id = $_GET['id'];

        $photoRepository = new PhotoRepository();
        
        $photo = $photoRepository->findPhotoById($id);

        unlink($photo->getPath());

        $photoRepository->deletePhotoById($photo);

        header('Location: /galeria');
    }

    // Renderiza para pagina error.
    public static function error():void
    {
        require __DIR__ . "../../../public/view/error.php";
    }
}

