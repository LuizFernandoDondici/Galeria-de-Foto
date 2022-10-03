<?php

namespace Projeto\SistemaLogin\App\Model;

use Projeto\SistemaLogin\App\Repository\Config\EntityManagerCreator;

class PhotoRepository
{
    
    private $entityManager;

    public function __construct()
    {   
        $this->entityManager = EntityManagerCreator::createEntityManager();
    }

    // Adiciona uma foto no banco de dados.
    public function createPhoto(Photo $photo):void
    {   
        try {
            
            $this->entityManager->persist($photo);
            $this->entityManager->flush();
            
        } catch (\Throwable $th) {

            header('Location: /erro');
        }
    }

    // Busca todas as fotos.
    public function findPhotos():array
    {
        try {

            $photoRepository = $this->entityManager->getRepository(Photo::class);

            $listPhotos = $photoRepository->findAll();

            return $listPhotos;

        } catch (\Throwable $th) {

            header('Location: /erro');
        }
    }

    // Busca foto por nome.
    public function findPhotoByName(string $name):Photo|null
    {
        try {

            $photoRepository = $this->entityManager->getRepository(Photo::class);
            
            $photo =  $photoRepository->findOneBy(
                [
                    'name' => $name
                ]
            );

            if ($photo == null) {
                return null;
            }

            return $photo;

        } catch (\Throwable $th) {

            header('Location: /erro');
        }
    }

    // Busca foto por id.
    public function findPhotoById(string $id):Photo
    {
        try {

            $photoRepository = $this->entityManager->getRepository(Photo::class);
            
            $photo =  $photoRepository->findOneBy(
                [
                    'id' => $id
                ]
            );
            
            return $photo;

        } catch (\Throwable $th) {

            header('Location: /erro');
        }
    }

    // Deleta foto.
    public function deletePhotoById(Photo $photo):void
    {
        try {

            $this->entityManager->remove($photo);
            $this->entityManager->flush();

        } catch (\Throwable $th) {

            header('Location: /erro');
        }
    }
}

