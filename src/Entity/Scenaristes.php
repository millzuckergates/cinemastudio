<?php

namespace App\Entity;

use App\Repository\ScenaristesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ScenaristesRepository::class)
 */
class Scenaristes
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
    private $inspiration;

    /**
     * @ORM\Column(type="integer")
     */
    private $creativite;

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

    public function getInspiration(): ?int
    {
        return $this->inspiration;
    }

    public function setInspiration(int $inspiration): self
    {
        $this->inspiration = $inspiration;

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
}
