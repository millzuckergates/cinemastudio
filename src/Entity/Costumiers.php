<?php

namespace App\Entity;

use App\Repository\CostumiersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CostumiersRepository::class)
 */
class Costumiers
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
    private $habilete;

    /**
     * @ORM\Column(type="integer")
     */
    private $sens_du_detail;

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

    public function getHabilete(): ?int
    {
        return $this->habilete;
    }

    public function setHabilete(int $habilete): self
    {
        $this->habilete = $habilete;

        return $this;
    }

    public function getSensDuDetail(): ?int
    {
        return $this->sens_du_detail;
    }

    public function setSensDuDetail(int $sens_du_detail): self
    {
        $this->sens_du_detail = $sens_du_detail;

        return $this;
    }
}
