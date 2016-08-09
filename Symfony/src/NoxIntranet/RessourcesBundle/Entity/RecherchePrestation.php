<?php

namespace NoxIntranet\RessourcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecherchePrestation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\RessourcesBundle\Entity\RecherchePrestationRepository")
 */
class RecherchePrestation {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="LieuOperation", type="string", length=255)
     */
    private $lieuOperation;

    /**
     * @var string
     *
     * @ORM\Column(name="LieuPrestation", type="string", length=255)
     */
    private $lieuPrestation;

    /**
     * @var string
     *
     * @ORM\Column(name="Descriptif", type="string", length=255)
     */
    private $descriptif;

    /**
     * @var string
     *
     * @ORM\Column(name="Deplacement", type="string", length=255)
     */
    private $deplacement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDemarrage", type="date")
     */
    private $dateDemarrage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateRendu", type="date")
     */
    private $dateRendu;

    /**
     * @var string
     *
     * @ORM\Column(name="Livrables", type="string", length=255)
     */
    private $livrables;

    /**
     * @var float
     *
     * @ORM\Column(name="VolumeSousTraitance", type="float")
     */
    private $volumeSousTraitance;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=255)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="EmailDA", type="string", length=255)
     */
    private $emailDA;

    /**
     * @var string
     *
     * @ORM\Column(name="Demandeur", type="string", length=255)
     */
    private $demandeur;
    
    /**
     * @var string
     *
     * @ORM\Column(name="CleDemande", type="string", length=255)
     */
    private $cleDemande;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set lieuOperation
     *
     * @param string $lieuOperation
     *
     * @return RecherchePrestation
     */
    public function setLieuOperation($lieuOperation) {
        $this->lieuOperation = $lieuOperation;

        return $this;
    }

    /**
     * Get lieuOperation
     *
     * @return string
     */
    public function getLieuOperation() {
        return $this->lieuOperation;
    }

    /**
     * Set lieuPrestation
     *
     * @param string $lieuPrestation
     *
     * @return RecherchePrestation
     */
    public function setLieuPrestation($lieuPrestation) {
        $this->lieuPrestation = $lieuPrestation;

        return $this;
    }

    /**
     * Get lieuPrestation
     *
     * @return string
     */
    public function getLieuPrestation() {
        return $this->lieuPrestation;
    }

    /**
     * Set descriptif
     *
     * @param string $descriptif
     *
     * @return RecherchePrestation
     */
    public function setDescriptif($descriptif) {
        $this->descriptif = $descriptif;

        return $this;
    }

    /**
     * Get descriptif
     *
     * @return string
     */
    public function getDescriptif() {
        return $this->descriptif;
    }

    /**
     * Set deplacement
     *
     * @param string $deplacement
     *
     * @return RecherchePrestation
     */
    public function setDeplacement($deplacement) {
        $this->deplacement = $deplacement;

        return $this;
    }

    /**
     * Get deplacement
     *
     * @return string
     */
    public function getDeplacement() {
        return $this->deplacement;
    }

    /**
     * Set dateDemarrage
     *
     * @param \DateTime $dateDemarrage
     *
     * @return RecherchePrestation
     */
    public function setDateDemarrage($dateDemarrage) {
        $this->dateDemarrage = $dateDemarrage;

        return $this;
    }

    /**
     * Get dateDemarrage
     *
     * @return \DateTime
     */
    public function getDateDemarrage() {
        return $this->dateDemarrage;
    }

    /**
     * Set dateRendu
     *
     * @param \DateTime $dateRendu
     *
     * @return RecherchePrestation
     */
    public function setDateRendu($dateRendu) {
        $this->dateRendu = $dateRendu;

        return $this;
    }

    /**
     * Get dateRendu
     *
     * @return \DateTime
     */
    public function getDateRendu() {
        return $this->dateRendu;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return RecherchePrestation
     */
    public function setStatus($status) {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Set volumeSousTraitance
     *
     * @param float $volumeSousTraitance
     *
     * @return RecherchePrestation
     */
    public function setVolumeSousTraitance($volumeSousTraitance) {
        $this->volumeSousTraitance = $volumeSousTraitance;

        return $this;
    }

    /**
     * Get volumeSousTraitance
     *
     * @return float
     */
    public function getVolumeSousTraitance() {
        return $this->volumeSousTraitance;
    }

    /**
     * Set livrables
     *
     * @param string $livrables
     *
     * @return RecherchePrestation
     */
    public function setLivrables($livrables) {
        $this->livrables = $livrables;

        return $this;
    }

    /**
     * Get livrables
     *
     * @return string
     */
    public function getLivrables() {
        return $this->livrables;
    }

    public function __construct() {
        $this->setStatus("Chargé d'affaire");
    }

    /**
     * Set emailDA
     *
     * @param string $emailDA
     *
     * @return RecherchePrestation
     */
    public function setEmailDA($emailDA) {
        $this->emailDA = $emailDA;

        return $this;
    }

    /**
     * Get emailDA
     *
     * @return string
     */
    public function getEmailDA() {
        return $this->emailDA;
    }


    /**
     * Set demandeur
     *
     * @param string $demandeur
     *
     * @return RecherchePrestation
     */
    public function setDemandeur($demandeur)
    {
        $this->demandeur = $demandeur;

        return $this;
    }

    /**
     * Get demandeur
     *
     * @return string
     */
    public function getDemandeur()
    {
        return $this->demandeur;
    }

    /**
     * Set cleDemande
     *
     * @param string $cleDemande
     *
     * @return RecherchePrestation
     */
    public function setCleDemande($cleDemande)
    {
        $this->cleDemande = $cleDemande;

        return $this;
    }

    /**
     * Get cleDemande
     *
     * @return string
     */
    public function getCleDemande()
    {
        return $this->cleDemande;
    }
}
