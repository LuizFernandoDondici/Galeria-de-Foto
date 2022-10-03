<?php

namespace Projeto\SistemaLogin\App\Model;

class PhotoService
{
    
    // Verifica existencia de um arquivo,
    // Valida extensão da foto.
    public function validadePhoto(Photo $photo):string|null
    {
        $ext = pathinfo($photo->getPath(), PATHINFO_EXTENSION);

        $extensions = [
            'jpeg', 'jpg', 'png'
        ];

        if (empty($ext)) {
            return 'Nenhum arquivo encontrado';
        }

        if (!in_array(strtolower($ext), $extensions)) {
            return 'Extensão não permitida';
        }

        return null;
    }
}