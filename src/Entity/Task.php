<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TaskRepository::class)
 */
class Task
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=90)
     */
    private $title;

    /**
     * @ORM\Column(type="boolean")
     */
    private $completed;

    /**
     * @ORM\ManyToOne(targetEntity=TodoList::class, inversedBy="tasks")
     * @ORM\JoinColumn(nullable=false)
     */

    private $list;


    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }


    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of completed
     */
    public function getCompleted(): ?bool
    {
        return $this->completed;
    }

    /**
     * Set the value of completed
     *
     * @return  self
     */
    public function setCompleted(bool $completed)
    {
        $this->completed = $completed;

        return $this;
    }

    /**
     * Get the value of list
     */
    public function getList(): ?TodoList
    {
        return $this->list;
    }

    /**
     * Set the value of list
     *
     * @return  self
     */
    public function setList(?TodoList $list)
    {
        $this->list = $list;

        return $this;
    }
}
