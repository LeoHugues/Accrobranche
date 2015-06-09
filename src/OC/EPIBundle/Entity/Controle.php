<?php

namespace OC\EPIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Controle
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\EPIBundle\Entity\ControleRepository")
 */
class Controle
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateControle", type="datetime")
     */
    private $dateControle;

    /**
     * @var string
     *
     * @ORM\Column(name="sangle", type="string", length=2)
     */
    private $sangle;

    /**
     * @var string
     *
     * @ORM\Column(name="couture", type="string", length=2)
     */
    private $couture;

    /**
     * @var string
     *
     * @ORM\Column(name="marquage", type="string", length=2)
     */
    private $marquage;

    /**
     * @var string
     *
     * @ORM\Column(name="longes", type="string", length=2)
     */
    private $longes;

    /**
     * @var string
     *
     * @ORM\Column(name="mousqueton", type="string", length=2)
     */
    private $mousqueton;

    /**
     * @var string
     *
     * @ORM\Column(name="remarque", type="string")
     */
    private $remarque;

    /**
     * @ORM\ManyToOne(targetEntity="Equipement", inversedBy="controles")
     * @ORM\JoinColumn(name="equipement_id", referencedColumnName="id")
     **/
    private $equipement;

    /**
     * @ORM\ManyToOne(targetEntity="OC\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     **/
    private $user;

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
     * Set dateControle
     *
     * @param \DateTime $dateControle
     * @return Controle
     */
    public function setDateControle($dateControle)
    {
        $this->dateControle = $dateControle;

        return $this;
    }

    /**
     * Get dateControle
     *
     * @return \DateTime 
     */
    public function getDateControle()
    {
        return $this->dateControle;
    }

    /**
     * Set sangle
     *
     * @param string $sangle
     * @return Controle
     */
    public function setSangle($sangle)
    {
        $this->sangle = $sangle;

        return $this;
    }

    /**
     * Get sangle
     *
     * @return string 
     */
    public function getSangle()
    {
        return $this->sangle;
    }

    /**
     * Set couture
     *
     * @param string $couture
     * @return Controle
     */
    public function setCouture($couture)
    {
        $this->couture = $couture;

        return $this;
    }

    /**
     * Get couture
     *
     * @return string 
     */
    public function getCouture()
    {
        return $this->couture;
    }

    /**
     * Set marquage
     *
     * @param string $marquage
     * @return Controle
     */
    public function setMarquage($marquage)
    {
        $this->marquage = $marquage;

        return $this;
    }

    /**
     * Get marquage
     *
     * @return string 
     */
    public function getMarquage()
    {
        return $this->marquage;
    }

    /**
     * Set longes
     *
     * @param string $longes
     * @return Controle
     */
    public function setLonges($longes)
    {
        $this->longes = $longes;

        return $this;
    }

    /**
     * Get longes
     *
     * @return string 
     */
    public function getLonges()
    {
        return $this->longes;
    }

    /**
     * Set mousqueton
     *
     * @param string $mousqueton
     * @return Controle
     */
    public function setMousqueton($mousqueton)
    {
        $this->mousqueton = $mousqueton;

        return $this;
    }

    /**
     * Get mousqueton
     *
     * @return string 
     */
    public function getMousqueton()
    {
        return $this->mousqueton;
    }

    /**
     * @return mixed
     */
    public function getEquipement()
    {
        return $this->equipement;
    }

    /**
     * @param mixed $equipement
     */
    public function setEquipement($equipement)
    {
        $this->equipement = $equipement;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getRemarque()
    {
        return $this->remarque;
    }

    /**
     * @param string $remarque
     */
    public function setRemarque($remarque)
    {
        $this->remarque = $remarque;
    }
}
