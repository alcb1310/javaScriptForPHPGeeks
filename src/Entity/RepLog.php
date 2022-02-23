<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\RepLogRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RepLogRepository::class)]
#[ApiResource]
class RepLog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $reps;

    #[ORM\Column(type: 'float')]
    private $totalWeightLifted;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReps(): ?int
    {
        return $this->reps;
    }

    public function setReps(int $reps): self
    {
        $this->reps = $reps;

        return $this;
    }

    public function getTotalWeightLifted(): ?float
    {
        return $this->totalWeightLifted;
    }

    public function setTotalWeightLifted(float $totalWeightLifted): self
    {
        $this->totalWeightLifted = $totalWeightLifted;

        return $this;
    }
}
