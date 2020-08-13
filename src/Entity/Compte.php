<?php

namespace App\Entity;

use App\Repository\CompteRepository;
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
     * @ORM\Column(type="date")
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
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateFin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeCompte;

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

    public function getDateOuverture(): ?\DateTimeInterface
    {
        return $this->dateOuverture;
    }

    public function setDateOuverture(\DateTimeInterface $dateOuverture): self
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

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getTypeCompte(): ?string
    {
        return $this->typeCompte;
    }

    public function setTypeCompte(string $typeCompte): self
    {
        $this->typeCompte = $typeCompte;

        return $this;
    }
}
