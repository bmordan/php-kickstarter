<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjectRepository")
 */
class Project
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
    private $title;

    /**
     * @ORM\Column(type="integer")
     */
    private $target;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pledge", mappedBy="project")
     */
    private $pledges;

    public function __construct()
    {
        $this->pledges = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getTarget(): ?int
    {
        return $this->target;
    }

    public function setTarget(int $target): self
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @return Collection|Pledge[]
     */
    public function getPledges(): Collection
    {
        return $this->pledges;
    }

    public function addPledge(Pledge $pledge): self
    {
        if (!$this->pledges->contains($pledge)) {
            $this->pledges[] = $pledge;
            $pledge->setProject($this);
        }

        return $this;
    }

    public function removePledge(Pledge $pledge): self
    {
        if ($this->pledges->contains($pledge)) {
            $this->pledges->removeElement($pledge);
            // set the owning side to null (unless already changed)
            if ($pledge->getProject() === $this) {
                $pledge->setProject(null);
            }
        }

        return $this;
    }
}
