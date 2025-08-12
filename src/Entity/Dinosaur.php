<?php

namespace App\Entity;

use App\Repository\DinosaurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DinosaurRepository::class)
 */
class Dinosaur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private ?string $name = null;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private ?string $genus = null;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $length = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $enclosure = null;

    public function __construct(string $name, string $genus, int $length, string $enclosure)
    {
        $this->name = $name;
        $this->genus = $genus;
        $this->length = $length;
        $this->enclosure = $enclosure;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getGenus(): ?string
    {
        return $this->genus;
    }

    public function getLength(): ?int
    {
        return $this->length;
    }

    public function getEnclosure(): ?string
    {
        return $this->enclosure;
    }
}
