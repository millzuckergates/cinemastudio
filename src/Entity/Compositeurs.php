<?php

namespace App\Entity;

use App\Repository\CompositeursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompositeursRepository::class)
 */
class Compositeurs
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
    private $culture_musicale;

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

    public function getCultureMusicale(): ?int
    {
        return $this->culture_musicale;
    }

    public function setCultureMusicale(int $culture_musicale): self
    {
        $this->culture_musicale = $culture_musicale;

        return $this;
    }
}
