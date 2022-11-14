<?php

namespace App\Entity;

use App\Repository\TechniciensFXRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TechniciensFXRepository::class)
 */
class TechniciensFX
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
    private $creativite;

    /**
     * @ORM\Column(type="integer")
     */
    private $rigueur;

    /**
     * @ORM\Column(type="integer")
     */
    private $minutie;

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

    public function getCreativite(): ?int
    {
        return $this->creativite;
    }

    public function setCreativite(int $creativite): self
    {
        $this->creativite = $creativite;

        return $this;
    }

    public function getRigueur(): ?int
    {
        return $this->rigueur;
    }

    public function setRigueur(int $rigueur): self
    {
        $this->rigueur = $rigueur;

        return $this;
    }

    public function getMinutie(): ?int
    {
        return $this->minutie;
    }

    public function setMinutie(int $minutie): self
    {
        $this->minutie = $minutie;

        return $this;
    }
}
