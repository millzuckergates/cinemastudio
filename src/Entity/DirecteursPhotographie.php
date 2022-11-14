<?php

namespace App\Entity;

use App\Repository\DirecteursPhotographieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DirecteursPhotographieRepository::class)
 */
class DirecteursPhotographie
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
    private $organisation;

    /**
     * @ORM\Column(type="integer")
     */
    private $exigence;

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

    public function getOrganisation(): ?int
    {
        return $this->organisation;
    }

    public function setOrganisation(int $organisation): self
    {
        $this->organisation = $organisation;

        return $this;
    }

    public function getExigence(): ?int
    {
        return $this->exigence;
    }

    public function setExigence(int $exigence): self
    {
        $this->exigence = $exigence;

        return $this;
    }
}
