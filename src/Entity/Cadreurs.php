<?php

namespace App\Entity;

use App\Repository\CadreursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CadreursRepository::class)
 */
class Cadreurs
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
    private $sens_artistique;

    /**
     * @ORM\Column(type="integer")
     */
    private $travail_equipe;

    /**
     * @ORM\Column(type="integer")
     */
    private $habilete;

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

    public function getSensArtistique(): ?int
    {
        return $this->sens_artistique;
    }

    public function setSensArtistique(int $sens_artistique): self
    {
        $this->sens_artistique = $sens_artistique;

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

    public function getHabilete(): ?int
    {
        return $this->habilete;
    }

    public function setHabilete(int $habilete): self
    {
        $this->habilete = $habilete;

        return $this;
    }
}
