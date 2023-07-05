<?php

namespace App\Entity;
/**
 * @Entity
 */
class Aluno{
    /**
     * @Id
     * GeneratedValue
     * @Column(type="integer")
     */
    private $id;
    /**
    * @Column(type="string", length=255)
    */
    private $name;

    public function getId(): int{
        return $this->id;
    }
    public function getName(): string{
        return $this->name;
    }
    public function setName(String $name): self{
        $this->name = $name;
        return $this;
    }
}