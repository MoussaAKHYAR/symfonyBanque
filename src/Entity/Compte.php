<?php

namespace App\Entity;

use App\Repository\CompteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompteRepository::class)
 */
class Compte
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
    private $numero;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rib;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $solde;

    /**
     * @ORM\Column(type="string")
     */
    private $dateOuverture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $raisonSocial;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $salaire;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomEmployeur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telEmployeur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numerIdentification;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $agios;

    /**
     * @ORM\Column(type="float")
     */
    private $fraisOuverture;

    /**
     * @ORM\Column(type="float")
     */
    private $remuneration;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $dateFin;

    /**
     * @ORM\OneToMany(targetEntity=TypeCompte::class, mappedBy="comptes")
     */
    private $typeCompte;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="comptes")
     */
    private $clientPhysique;

    /**
     * @ORM\ManyToOne(targetEntity=Entreprise::class, inversedBy="comptes")
     */
    private $entreprise;

    public function __construct()
    {
        $this->typeCompte = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getRib(): ?string
    {
        return $this->rib;
    }

    public function setRib(string $rib): self
    {
        $this->rib = $rib;

        return $this;
    }

    public function getSolde(): ?float
    {
        return $this->solde;
    }

    public function setSolde(?float $solde): self
    {
        $this->solde = $solde;

        return $this;
    }

    public function getDateOuverture(): ?string
    {
        return $this->dateOuverture;
    }

    public function setDateOuverture(?string $dateOuverture): self
    {
        $this->dateOuverture = $dateOuverture;

        return $this;
    }

    public function getRaisonSocial(): ?string
    {
        return $this->raisonSocial;
    }

    public function setRaisonSocial(?string $raisonSocial): self
    {
        $this->raisonSocial = $raisonSocial;

        return $this;
    }

    public function getSalaire(): ?float
    {
        return $this->salaire;
    }

    public function setSalaire(?float $salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function getNomEmployeur(): ?string
    {
        return $this->nomEmployeur;
    }

    public function setNomEmployeur(?string $nomEmployeur): self
    {
        $this->nomEmployeur = $nomEmployeur;

        return $this;
    }

    public function getTelEmployeur(): ?string
    {
        return $this->telEmployeur;
    }

    public function setTelEmployeur(?string $telEmployeur): self
    {
        $this->telEmployeur = $telEmployeur;

        return $this;
    }

    public function getNumerIdentification(): ?string
    {
        return $this->numerIdentification;
    }

    public function setNumerIdentification(?string $numerIdentification): self
    {
        $this->numerIdentification = $numerIdentification;

        return $this;
    }

    public function getAgios(): ?float
    {
        return $this->agios;
    }

    public function setAgios(?float $agios): self
    {
        $this->agios = $agios;

        return $this;
    }

    public function getFraisOuverture(): ?float
    {
        return $this->fraisOuverture;
    }

    public function setFraisOuverture(float $fraisOuverture): self
    {
        $this->fraisOuverture = $fraisOuverture;

        return $this;
    }

    public function getRemuneration(): ?float
    {
        return $this->remuneration;
    }

    public function setRemuneration(float $remuneration): self
    {
        $this->remuneration = $remuneration;

        return $this;
    }

    public function getDateDebut(): ?string
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?string $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?string
    {
        return $this->dateFin;
    }

    public function setDateFin(?string $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * @return Collection|TypeCompte[]
     */
    public function getTypeCompte(): Collection
    {
        return $this->typeCompte;
    }

    public function addTypeCompte(TypeCompte $typeCompte): self
    {
        if (!$this->typeCompte->contains($typeCompte)) {
            $this->typeCompte[] = $typeCompte;
            $typeCompte->setComptes($this);
        }

        return $this;
    }

    public function removeTypeCompte(TypeCompte $typeCompte): self
    {
        if ($this->typeCompte->contains($typeCompte)) {
            $this->typeCompte->removeElement($typeCompte);
            // set the owning side to null (unless already changed)
            if ($typeCompte->getComptes() === $this) {
                $typeCompte->setComptes(null);
            }
        }

        return $this;
    }

    public function getEntreprise(): ?Entreprise
    {
        return $this->entreprise;
    }

    public function setEntreprise(?Entreprise $entreprise): self
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    public function getClientPhysique(): ?Client
    {
        return $this->clientPhysique;
    }

    public function setClientPhysique(?Client $clientPhysique): self
    {
        $this->clientPhysique = $clientPhysique;

        return $this;
    }

}
