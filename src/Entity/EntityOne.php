<?php

namespace App\Entity;

use App\Repository\EntityOneRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EntityOneRepository::class)
 */
class EntityOne
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
    private $rand1_2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRand12(): ?int
    {
        return $this->rand1_2;
    }

    public function setRand12(int $rand1_2): self
    {
        $this->rand1_2 = $rand1_2;

        return $this;
    }
}
