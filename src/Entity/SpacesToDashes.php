<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpacesToDashesRepository")
 */
class SpacesToDashes implements transform
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function transform( $transform) : string
    {
        // TODO: Implement transform() method.

        return  str_replace(' ', '-',($transform));
    }
}
