<?php

namespace App\Entity;

use App\Repository\ProducteursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProducteursRepository::class)
 */
class Producteurs
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
    private $persuasion;

    /**
     * @ORM\Column(type="integer")
     */
    private $adaptabilite;

    /**
     * @ORM\Column(type="integer")
     */
    private $audace;

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

    public function getPersuasion(): ?int
    {
        return $this->persuasion;
    }

    public function setPersuasion(int $persuasion): self
    {
        $this->persuasion = $persuasion;

        return $this;
    }

    public function getAdaptabilite(): ?int
    {
        return $this->adaptabilite;
    }

    public function setAdaptabilite(int $adaptabilite): self
    {
        $this->adaptabilite = $adaptabilite;

        return $this;
    }

    public function getAudace(): ?int
    {
        return $this->audace;
    }

    public function setAudace(int $audace): self
    {
        $this->audace = $audace;

        return $this;
    }
}
