<?php

namespace App\Entity;

use App\Repository\UsersHasGameHasPlatformsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsersHasGameHasPlatformsRepository::class)]
class UsersHasGameHasPlatforms
{
    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Users::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $id_user;
    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Games::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $id_game;
    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: Plateforms::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $id_platform;


    public function getIdUser(): ?Users
    {
        return $this->id_user;
    }

    public function setIdUser(?Users $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getIdGame(): ?Games
    {
        return $this->id_game;
    }

    public function setIdGame(?Games $id_game): self
    {
        $this->id_game = $id_game;

        return $this;
    }

    public function getIdPlatform(): ?Plateforms
    {
        return $this->id_platform;
    }

    public function setIdPlatform(?Plateforms $id_platform): self
    {
        $this->id_platform = $id_platform;

        return $this;
    }
}
