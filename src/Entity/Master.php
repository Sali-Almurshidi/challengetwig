<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MasterRepository")
 */
class Master
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

    private $transformation;

    public function __construct(transform $transform)
    {
        $this->transformation = $transform;
    }

    /**
     * @ORM\Column(type="string", length=255)
     */


    public function getId(): ?int
    {
        return $this->id;
    }


    public function transform (string $input) : string
    {
        return $this->transformation->transform($input);
    }

}
