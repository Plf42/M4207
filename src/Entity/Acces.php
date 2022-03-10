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

    public function getUtilisateurId(): ?User
    {
        return $this->utilisateur_id;
    }

    public function setUtilisateurId(?User $utilisateur_id): self
    {
        $this->utilisateur_id = $utilisateur_id;

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
