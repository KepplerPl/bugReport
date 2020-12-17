<?php

namespace App\Entity;

use App\Repository\EntityThreeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EntityThreeRepository::class)
 */
class EntityThree
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $random_string;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRandomString(): ?string
    {
        return $this->random_string;
    }

    public function setRandomString(string $random_string): self
    {
        $this->random_string = $random_string;

        return $this;
    }
}
