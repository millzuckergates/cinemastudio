<?php

namespace App\Entity;

use App\Repository\PerchmansRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PerchmansRepository::class)
 */
class Perchmans
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
    private $travail_equipe;

    /**
     * @ORM\Column(type="integer")
     */
    private $sensibilite_musicale;

    /**
     * @ORM\Column(type="integer")
     */
    private $meticulosite;

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

    public function getTravailEquipe(): ?int
    {
        return $this->travail_equipe;
    }

    public function setTravailEquipe(int $travail_equipe): self
    {
        $this->travail_equipe = $travail_equipe;

        return $this;
    }

    public function getSensibiliteMusicale(): ?int
    {
        return $this->sensibilite_musicale;
    }

    public function setSensibiliteMusicale(int $sensibilite_musicale): self
    {
        $this->sensibilite_musicale = $sensibilite_musicale;

        return $this;
    }

    public function getMeticulosite(): ?int
    {
        return $this->meticulosite;
    }

    public function setMeticulosite(int $meticulosite): self
    {
        $this->meticulosite = $meticulosite;

        return $this;
    }
}
