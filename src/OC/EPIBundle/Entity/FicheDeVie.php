<?php

namespace OC\EPIBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FicheDeVie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\EPIBundle\Entity\FicheDeVieRepository")
 */
class FicheDeVie
{
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
     * @ORM\Column(name="modele", type="string", length=255)
     * @Assert\NotBlank(message="Veuillez saisir le modele")
     *
     */
    private $modele;

    /**
     * @var string
     *
     * @ORM\Column(name="fabriquant", type="string", length=255)
     * @Assert\NotBlank(message="Veuillez saisir le nom du fabriquant")
     */
    private $fabriquant;

    /**
     * @var string
     *
     * @ORM\Column(name="identifiantFab", type="string", length=255)
     * @Assert\NotBlank(message="Veuillez saisir l'identifiant du fabriquant")
     */
    private $identifiantFab;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAchat", type="datetime")
     */
    private $dateAchat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFabrication", type="datetime")
     */
    private $dateFabrication;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateMiseEnService", type="datetime")
     */
    private $dateMiseEnService;

    /**
     * @var integer
     *
     * @ORM\Column(name="dureeDeVie", type="integer")
     * @Assert\NotBlank(message="Veuillez saisir la durée de vie du materiel")
     */
    private $dureeDeVie;

    /**
     * @var integer
     *
     * @ORM\Column(name="frequenceControle", type="integer")
     * @Assert\NotBlank(message="Veuillez saisir la fréquence des controles pour ce materiel")
     */
    private $frequenceControle;

    /**
     * @ORM\OneToMany(targetEntity="Equipement", mappedBy="ficheDeVie", cascade={"persist", "remove"})
     **/
    private $equipements;

    public function __construct() {
        $this->equipements = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set modele
     *
     * @param string $modele
     * @return FicheDeVie
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string 
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set fabriquant
     *
     * @param string $fabriquant
     * @return FicheDeVie
     */
    public function setFabriquant($fabriquant)
    {
        $this->fabriquant = $fabriquant;

        return $this;
    }

    /**
     * Get fabriquant
     *
     * @return string 
     */
    public function getFabriquant()
    {
        return $this->fabriquant;
    }

    /**
     * Set identifiantFab
     *
     * @param string $identifiantFab
     * @return FicheDeVie
     */
    public function setIdentifiantFab($identifiantFab)
    {
        $this->identifiantFab = $identifiantFab;

        return $this;
    }

    /**
     * Get identifiantFab
     *
     * @return string 
     */
    public function getIdentifiantFab()
    {
        return $this->identifiantFab;
    }

    /**
     * Set dateAchat
     *
     * @param \DateTime $dateAchat
     * @return FicheDeVie
     */
    public function setDateAchat($dateAchat)
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    /**
     * Get dateAchat
     *
     * @return \DateTime 
     */
    public function getDateAchat()
    {
        return $this->dateAchat;
    }

    /**
     * Set dateFabrication
     *
     * @param \DateTime $dateFabrication
     * @return FicheDeVie
     */
    public function setDateFabrication($dateFabrication)
    {
        $this->dateFabrication = $dateFabrication;

        return $this;
    }

    /**
     * Get dateFabrication
     *
     * @return \DateTime 
     */
    public function getDateFabrication()
    {
        return $this->dateFabrication;
    }

    /**
     * Set dateMiseEnService
     *
     * @param \DateTime $dateMiseEnService
     * @return FicheDeVie
     */
    public function setDateMiseEnService($dateMiseEnService)
    {
        $this->dateMiseEnService = $dateMiseEnService;

        return $this;
    }

    /**
     * Get dateMiseEnService
     *
     * @return \DateTime 
     */
    public function getDateMiseEnService()
    {
        return $this->dateMiseEnService;
    }

    /**
     * Set dureeDeVie
     *
     * @param integer $dureeDeVie
     * @return FicheDeVie
     */
    public function setDureeDeVie($dureeDeVie)
    {
        $this->dureeDeVie = $dureeDeVie;

        return $this;
    }

    /**
     * Get dureeDeVie
     *
     * @return integer 
     */
    public function getDureeDeVie()
    {
        return $this->dureeDeVie;
    }

    /**
     * Set frequenceControle
     *
     * @param integer $frequenceControle
     * @return FicheDeVie
     */
    public function setFrequenceControle($frequenceControle)
    {
        $this->frequenceControle = $frequenceControle;

        return $this;
    }

    /**
     * Get frequenceControle
     *
     * @return integer 
     */
    public function getFrequenceControle()
    {
        return $this->frequenceControle;
    }

    /**
     * @return mixed
     */
    public function getEquipements()
    {
        return $this->equipements;
    }

    /**
     * @param mixed $equipements
     */
    public function setEquipements($equipements)
    {
        $this->equipements = $equipements;
    }

    public function getLabel()
    {
        return $this->modele .' - '. $this->fabriquant;
    }
}
