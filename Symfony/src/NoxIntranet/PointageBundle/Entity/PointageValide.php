<?php

namespace NoxIntranet\PointageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PointageValide
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\PointageBundle\Entity\PointageValideRepository")
 */
class PointageValide {

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
     * @ORM\Column(name="User", type="string", length=255)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="Firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="Lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="Month", type="string", length=255)
     */
    private $month;

    /**
     * @var string
     *
     * @ORM\Column(name="Year", type="string", length=255)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="Absences", type="text")
     */
    private $absences;

    /**
     * @var string
     *
     * @ORM\Column(name="ForfaitsDeplacement", type="string", length=255)
     */
    private $forfaitsDeplacement;

    /**
     * @var string
     *
     * @ORM\Column(name="PrimesPanier", type="string", length=255)
     */
    private $primesPanier;

    /**
     * @var string
     *
     * @ORM\Column(name="TitreTransport", type="string", length=255)
     */
    private $titreTransport;

    /**
     * @var string
     *
     * @ORM\Column(name="TitresRepas", type="string", length=255)
     */
    private $titresRepas;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return PointageValide
     */
    public function setUser($user) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Set month
     *
     * @param string $month
     *
     * @return PointageValide
     */
    public function setMonth($month) {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return string
     */
    public function getMonth() {
        return $this->month;
    }

    /**
     * Set year
     *
     * @param string $year
     *
     * @return PointageValide
     */
    public function setYear($year) {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string
     */
    public function getYear() {
        return $this->year;
    }

    /**
     * Set absences
     *
     * @param string $absences
     *
     * @return PointageValide
     */
    public function setAbsences($absences) {
        $this->absences = $absences;

        return $this;
    }

    /**
     * Get absences
     *
     * @return string
     */
    public function getAbsences() {
        return $this->absences;
    }

    /**
     * Set forfaitsDeplacement
     *
     * @param string $forfaitsDeplacement
     *
     * @return PointageValide
     */
    public function setForfaitsDeplacement($forfaitsDeplacement) {
        $this->forfaitsDeplacement = $forfaitsDeplacement;

        return $this;
    }

    /**
     * Get forfaitsDeplacement
     *
     * @return string
     */
    public function getForfaitsDeplacement() {
        return $this->forfaitsDeplacement;
    }

    /**
     * Set primesPanier
     *
     * @param string $primesPanier
     *
     * @return PointageValide
     */
    public function setPrimesPanier($primesPanier) {
        $this->primesPanier = $primesPanier;

        return $this;
    }

    /**
     * Get primesPanier
     *
     * @return string
     */
    public function getPrimesPanier() {
        return $this->primesPanier;
    }

    /**
     * Set titreTransport
     *
     * @param string $titreTransport
     *
     * @return PointageValide
     */
    public function setTitreTransport($titreTransport) {
        $this->titreTransport = $titreTransport;

        return $this;
    }

    /**
     * Get titreTransport
     *
     * @return string
     */
    public function getTitreTransport() {
        return $this->titreTransport;
    }

    /**
     * Set titresRepas
     *
     * @param string $titresRepas
     *
     * @return PointageValide
     */
    public function setTitresRepas($titresRepas) {
        $this->titresRepas = $titresRepas;

        return $this;
    }

    /**
     * Get titresRepas
     *
     * @return string
     */
    public function getTitresRepas() {
        return $this->titresRepas;
    }


    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return PointageValide
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return PointageValide
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }
}
