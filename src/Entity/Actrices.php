<?php

namespace App\Entity;

use App\Repository\ActricesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActricesRepository::class)
 */
class Actrices
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
    private $improvisation;

    /**
     * @ORM\Column(type="integer")
     */
    private $imagination;

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

    public function getImprovisation(): ?int
    {
        return $this->improvisation;
    }

    public function setImprovisation(int $improvisation): self
    {
        $this->improvisation = $improvisation;

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
}
