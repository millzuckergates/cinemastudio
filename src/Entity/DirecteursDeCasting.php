<?php

namespace App\Entity;

use App\Repository\DirecteursDeCastingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DirecteursDeCastingRepository::class)
 */
class DirecteursDeCasting
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
    private $intuition;

    /**
     * @ORM\Column(type="integer")
     */
    private $observation;

    /**
     * @ORM\Column(type="integer")
     */
    private $jugement;

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

    public function getIntuition(): ?int
    {
        return $this->intuition;
    }

    public function setIntuition(int $intuition): self
    {
        $this->intuition = $intuition;

        return $this;
    }

    public function getObservation(): ?int
    {
        return $this->observation;
    }

    public function setObservation(int $observation): self
    {
        $this->observation = $observation;

        return $this;
    }

    public function getJugement(): ?int
    {
        return $this->jugement;
    }

    public function setJugement(int $jugement): self
    {
        $this->jugement = $jugement;

        return $this;
    }
}
