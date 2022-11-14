<?php

namespace App\Entity;

use App\Repository\RegisseursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RegisseursRepository::class)
 */
class Regisseurs
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
    private $organisation;

    /**
     * @ORM\Column(type="integer")
     */
    private $gestion;

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

    public function getOrganisation(): ?int
    {
        return $this->organisation;
    }

    public function setOrganisation(int $organisation): self
    {
        $this->organisation = $organisation;

        return $this;
    }

    public function getGestion(): ?int
    {
        return $this->gestion;
    }

    public function setGestion(int $gestion): self
    {
        $this->gestion = $gestion;

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
