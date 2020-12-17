<?php

namespace App\Entity;

use App\Repository\EntityTwoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EntityTwoRepository::class)
 */
class EntityTwo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $rand3_4;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRand34(): ?int
    {
        return $this->rand3_4;
    }

    public function setRand34(int $rand3_4): self
    {
        $this->rand3_4 = $rand3_4;

        return $this;
    }
}
