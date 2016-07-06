<?php

namespace NoxIntranet\PointageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersHierarchy
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\PointageBundle\Entity\UsersHierarchyRepository")
 */
class UsersHierarchy {

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
     * @ORM\Column(name="Username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="AA", type="string", length=255)
     */
    private $aa;

    /**
     * @var string
     *
     * @ORM\Column(name="DA", type="string", length=255)
     */
    private $da;

    /**
     * @var string
     *
     * @ORM\Column(name="RH", type="string", length=255)
     */
    private $rh;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return UsersHierarchy
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return UsersHierarchy
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Set aa
     *
     * @param string $aa
     *
     * @return UsersHierarchy
     */
    public function setAa($aa) {
        $this->aa = $aa;

        return $this;
    }

    /**
     * Get aa
     *
     * @return string
     */
    public function getAa() {
        return $this->aa;
    }

    /**
     * Set da
     *
     * @param string $da
     *
     * @return UsersHierarchy
     */
    public function setDa($da) {
        $this->da = $da;

        return $this;
    }

    /**
     * Get da
     *
     * @return string
     */
    public function getDa() {
        return $this->da;
    }

    /**
     * Set rh
     *
     * @param string $rh
     *
     * @return UsersHierarchy
     */
    public function setRh($rh) {
        $this->rh = $rh;

        return $this;
    }

    /**
     * Get rh
     *
     * @return string
     */
    public function getRh() {
        return $this->rh;
    }


    /**
     * Set username
     *
     * @param string $username
     *
     * @return UsersHierarchy
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
}