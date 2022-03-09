<?php

namespace App\Entity;

use App\Repository\AccesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AccesRepository::class)
 */
class Acces
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="acces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur_id;

    /**
     * @ORM\ManyToOne(targetEntity=Autorisation::class, inversedBy="acces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $autorisation;

    /**
     * @ORM\ManyToOne(targetEntity=Document::class, inversedBy="acces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $document_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateur(): ?User
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?User $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getAutorisation(): ?Autorisation
    {
        return $this->autorisation;
    }

    public function setAutorisation(?Autorisation $autorisation): self
    {
        $this->autorisation = $autorisation;

        return $this;
    }

    public function getDocumentId(): ?Document
    {
        return $this->document_id;
    }

    public function setDocumentId(?Document $document_id): self
    {
        $this->document_id = $document_id;

        return $this;
    }
}
