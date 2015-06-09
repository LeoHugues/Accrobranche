<?php

namespace OC\EPIBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Equipement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\EPIBundle\Entity\EquipementRepository")
 */
class Equipement
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
     * @var integer
     *
     * @ORM\Column(name="numInterne", type="integer")
     * @Assert\NotBlank(message="Vous devez renseigner le numéro interne du materiel")
     *
     */
    private $numInterne;

    /**
     * @var integer
     *
     * @ORM\Column(name="numSerie", type="integer")
     * @Assert\NotBlank(message="Vous devez renseigner le numéro de série du materiel")
     *
     */
    private $numSerie;

    /**
     * @ORM\ManyToOne(targetEntity="FicheDeVie", inversedBy="equipements")
     * @ORM\JoinColumn(name="ficheDeVie_id", referencedColumnName="id")
     **/
    private $ficheDeVie;

    /**
     * @ORM\OneToMany(targetEntity="Controle", mappedBy="equipement", cascade={"persist", "remove"})
     **/
    private $controles;

    public function __construct() {
        $this->controles = new ArrayCollection();
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
     * Set numInterne
     *
     * @param integer $numInterne
     * @return Equipement
     */
    public function setNumInterne($numInterne)
    {
        $this->numInterne = $numInterne;

        return $this;
    }

    /**
     * Get numInterne
     *
     * @return integer 
     */
    public function getNumInterne()
    {
        return $this->numInterne;
    }

    /**
     * Set numSerie
     *
     * @param integer $numSerie
     * @return Equipement
     */
    public function setNumSerie($numSerie)
    {
        $this->numSerie = $numSerie;

        return $this;
    }

    /**
     * Get numSerie
     *
     * @return integer 
     */
    public function getNumSerie()
    {
        return $this->numSerie;
    }

    /**
     * @return mixed
     */
    public function getFicheDeVie()
    {
        return $this->ficheDeVie;
    }

    /**
     * @param mixed $ficheDeVie
     */
    public function setFicheDeVie($ficheDeVie)
    {
        $this->ficheDeVie = $ficheDeVie;
    }

    /**
     * @return ArrayCollection
     */
    public function getControles()
    {
        return $this->controles;
    }

    /**
     * @param ArrayCollection $controles
     */
    public function setControles($controles)
    {
        $this->controles = $controles;
    }
}
