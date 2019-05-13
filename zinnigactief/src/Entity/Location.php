<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LocationRepository")
 */
class Location
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $breedtegraad;

    /**
     * @ORM\Column(type="integer")
     */
    private $lengtegraad;

    /**
     * @ORM\Column(type="blob")
     */
    private $afbeelding;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBreedtegraad(): ?int
    {
        return $this->breedtegraad;
    }

    public function setBreedtegraad(int $breedtegraad): self
    {
        $this->breedtegraad = $breedtegraad;

        return $this;
    }

    public function getLengtegraad(): ?int
    {
        return $this->lengtegraad;
    }

    public function setLengtegraad(int $lengtegraad): self
    {
        $this->lengtegraad = $lengtegraad;

        return $this;
    }

    public function getAfbeelding()
    {
        return $this->afbeelding;
    }

    public function setAfbeelding($afbeelding): self
    {
        $this->afbeelding = $afbeelding;

        return $this;
    }
}
