<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LogboekRepository")
 */
class Logboek
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Truck")
     * @ORM\JoinColumn(nullable=false)
     */
    private $truck;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $chauffeur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Begeleidingsbrief;

    /**
     * @ORM\Column(type="date")
     */
    private $Datum;

    /**
     * @ORM\Column(type="integer")
     */
    private $Aantalm3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Laadlocatie;

    /**
     * @ORM\Column(type="time")
     */
    private $Vertrektijd;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Bestemming;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Evenement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getTruck(): ?truck
    {
        return $this->truck;
    }

    public function setTruck(?truck $truck): self
    {
        $this->truck = $truck;

        return $this;
    }

    public function getChauffeur(): ?user
    {
        return $this->chauffeur;
    }

    public function setChauffeur(?user $chauffeur): self
    {
        $this->chauffeur = $chauffeur;

        return $this;
    }

    public function getBegeleidingsbrief(): ?string
    {
        return $this->Begeleidingsbrief;
    }

    public function setBegeleidingsbrief(string $Begeleidingsbrief): self
    {
        $this->Begeleidingsbrief = $Begeleidingsbrief;

        return $this;
    }

    public function getDatum(): ?\DateTimeInterface
    {
        return $this->Datum;
    }

    public function setDatum(\DateTimeInterface $Datum): self
    {
        $this->Datum = $Datum;

        return $this;
    }

    public function getAantalm3(): ?int
    {
        return $this->Aantalm3;
    }

    public function setAantalm3(int $Aantalm3): self
    {
        $this->Aantalm3 = $Aantalm3;

        return $this;
    }

    public function getLaadlocatie(): ?string
    {
        return $this->Laadlocatie;
    }

    public function setLaadlocatie(string $Laadlocatie): self
    {
        $this->Laadlocatie = $Laadlocatie;

        return $this;
    }

    public function getVertrektijd(): ?\DateTimeInterface
    {
        return $this->Vertrektijd;
    }

    public function setVertrektijd(\DateTimeInterface $Vertrektijd): self
    {
        $this->Vertrektijd = $Vertrektijd;

        return $this;
    }

    public function getBestemming(): ?string
    {
        return $this->Bestemming;
    }

    public function setBestemming(string $Bestemming): self
    {
        $this->Bestemming = $Bestemming;

        return $this;
    }

    public function getEvenement(): ?string
    {
        return $this->Evenement;
    }

    public function setEvenement(string $Evenement): self
    {
        $this->Evenement = $Evenement;

        return $this;
    }
}
