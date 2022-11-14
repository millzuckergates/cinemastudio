<?php

namespace App\Entity;

use App\Repository\PersonnagesRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass=PersonnagesRepository::class)
 */
class Personnages
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $prenom;

    /**
     * @ORM\Column(type="date")
     */
    private $date_de_naissance;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $statut;

    /**
     * @ORM\Column(type="integer")
     */
    private $recommandation;

    /**
     * @ORM\Column(type="integer")
     */
    private $reputation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img_url;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $type;

    /**
     * @Gedmo\Slug(fields={"nom", "prenom"})
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateDeNaissance(): ?\DateTimeInterface
    {
        return $this->date_de_naissance;
    }

    public function setDateDeNaissance(\DateTimeInterface $date_de_naissance): self
    {
        $this->date_de_naissance = $date_de_naissance;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getRecommandation(): ?int
    {
        return $this->recommandation;
    }

    public function setRecommandation(int $recommandation): self
    {
        $this->recommandation = $recommandation;

        return $this;
    }

    public function getReputation(): ?int
    {
        return $this->reputation;
    }

    public function setReputation(int $reputation): self
    {
        $this->reputation = $reputation;

        return $this;
    }

    public function getImgUrl(): ?string
    {
        return $this->img_url;
    }

    public function setImgUrl(string $img_url): self
    {
        $this->img_url = $img_url;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }
}
