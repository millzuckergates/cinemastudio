<?php

namespace App\Entity;

use App\Repository\AccessoiristesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AccessoiristesRepository::class)
 */
class Accessoiristes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Personnages::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $personnage;

    /**
     * @ORM\Column(type="integer")
     */
    private $imagination;

    /**
     * @ORM\Column(type="integer")
     */
    private $patience;

    /**
     * @ORM\Column(type="integer")
     */
    private $ingeniosite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPersonnage(): ?Personnages
    {
        return $this->personnage;
    }

    public function setPersonnage(Personnages $personnage): self
    {
        $this->personnage = $personnage;

        return $this;
    }

    public function getImagination(): ?int
    {
        return $this->imagination;
    }

    public function setImagination(int $imagination): self
    {
        $this->imagination = $imagination;

        return $this;
    }

    public function getPatience(): ?int
    {
        return $this->patience;
    }

    public function setPatience(int $patience): self
    {
        $this->patience = $patience;

        return $this;
    }

    public function getIngeniosite(): ?int
    {
        return $this->ingeniosite;
    }

    public function setIngeniosite(int $ingeniosite): self
    {
        $this->ingeniosite = $ingeniosite;

        return $this;
    }
}
