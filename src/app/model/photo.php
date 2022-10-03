<?php

namespace Projeto\SistemaLogin\App\Model;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

#[Entity]
class Photo
{

    #[Id]
    #[GeneratedValue]
    #[Column]
    private int $id;

    #[Column]
    private string $path;

    #[Column]
    private string $name;

    public function __construct($path, $name)
    {
        $this->path = $path;
        $this->name = $name;
    }

    public function getId():int
    {
        return $this->id;
    }

    public function getPath():string
    {
        return $this->path;
    }
 
    public function getName():string
    {
        return $this->name;
    }
}

