<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TruckRepository")
 */
class Truck
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Kenteken;

    /**
     * @ORM\Column(type="integer")
     */
    private $Bouwjaar;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKenteken(): ?string
    {
        return $this->Kenteken;
    }

    public function setKenteken(string $Kenteken): self
    {
        $this->Kenteken = $Kenteken;

        return $this;
    }

    public function getBouwjaar(): ?int
    {
        return $this->Bouwjaar;
    }

    public function setBouwjaar(int $Bouwjaar): self
    {
        $this->Bouwjaar = $Bouwjaar;

        return $this;
    }

    public function __toString() {
      return (string) $this->getBouwjaar().  ' - ' . $this->getKenteken();
    }
}
