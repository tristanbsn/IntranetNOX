<?php

namespace NoxIntranet\RessourcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proposition_Echanges
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NoxIntranet\RessourcesBundle\Entity\Proposition_EchangesRepository")
 */
class Proposition_Echanges {

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
     * @ORM\Column(name="cleDemande", type="string", length=255)
     */
    private $cleDemande;

    /**
     * @var string
     *
     * @ORM\Column(name="da2", type="string", length=255)
     */
    private $da2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="postDate", type="date")
     */
    private $postDate;

    /**
     * @var string
     *
     * @ORM\Column(name="sender", type="string", length=255)
     */
    private $sender;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set cleDemande
     *
     * @param string $cleDemande
     *
     * @return Proposition_Echanges
     */
    public function setCleDemande($cleDemande) {
        $this->cleDemande = $cleDemande;

        return $this;
    }

    /**
     * Get cleDemande
     *
     * @return string
     */
    public function getCleDemande() {
        return $this->cleDemande;
    }

    /**
     * Set da2
     *
     * @param string $da2
     *
     * @return Proposition_Echanges
     */
    public function setDa2($da2) {
        $this->da2 = $da2;

        return $this;
    }

    /**
     * Get da2
     *
     * @return string
     */
    public function getDa2() {
        return $this->da2;
    }

    /**
     * Set postDate
     *
     * @param \DateTime $postDate
     *
     * @return Proposition_Echanges
     */
    public function setPostDate($postDate) {
        $this->postDate = $postDate;

        return $this;
    }

    /**
     * Get postDate
     *
     * @return \DateTime
     */
    public function getPostDate() {
        return $this->postDate;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Proposition_Echanges
     */
    public function setMessage($message) {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * Set sender
     *
     * @param string $sender
     *
     * @return Proposition_Echanges
     */
    public function setSender($sender) {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get sender
     *
     * @return string
     */
    public function getSender() {
        return $this->sender;
    }

    public function __construct() {
        $this->postDate = new \DateTime();
    }

}
