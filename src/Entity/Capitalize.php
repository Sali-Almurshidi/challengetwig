<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CapitalizeRepository")
 */
class Capitalize implements transform
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

    public function transform(string $changWord) : string
    {
        // TODO: Implement transform() method.

        $newWord = '';

        foreach (str_split($changWord) as $index => $char) {
            $newWord .= ($index % 2) ? strtolower($char) : strtoupper($char);
        }

        return $newWord;
    }

}
