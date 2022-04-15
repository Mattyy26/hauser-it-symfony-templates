<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
class Users
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nane;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNane(): ?string
    {
        return $this->nane;
    }

    public function setNane(string $nane): self
    {
        $this->nane = $nane;

        return $this;
    }
}
