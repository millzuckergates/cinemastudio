<?php

namespace App\Entity;

use App\Repository\IngenieursDuSonRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IngenieursDuSonRepository::class)
 */
class IngenieursDuSon
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
    private $attention;

    /**
     * @ORM\Column(type="integer")
     */
    private $imagination;

    /**
     * @ORM\Column(type="integer")
     */
    private $sensibilite_auditive;

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

    public function getAttention(): ?int
    {
        return $this->attention;
    }

    public function setAttention(int $attention): self
    {
        $this->attention = $attention;

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

    public function getSensibiliteAuditive(): ?int
    {
        return $this->sensibilite_auditive;
    }

    public function setSensibiliteAuditive(int $sensibilite_auditive): self
    {
        $this->sensibilite_auditive = $sensibilite_auditive;

        return $this;
    }
}
