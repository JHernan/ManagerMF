<?php

namespace Mf\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demarcation
 *
 * @ORM\Table(name="mf_demarcation")
 * @ORM\Entity
 */
class Demarcation
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="Player", inversedBy="demarcations")
     * @ORM\JoinTable(name="mf_players_demarcations")
     */
    private $players;

    /**
     * @ORM\OneToMany(targetEntity="TacticDemarcation", mappedBy="demarcation", cascade={"all"})
     */
    private $tactics;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return (string) $this->getName();
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Demarcation
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add players
     *
     * @param \Mf\ManagerBundle\Entity\Player $players
     * @return Demarcation
     */
    public function addPlayer(\Mf\ManagerBundle\Entity\Player $players)
    {
        $this->players[] = $players;
    
        return $this;
    }

    /**
     * Remove players
     *
     * @param \Mf\ManagerBundle\Entity\Player $players
     */
    public function removePlayer(\Mf\ManagerBundle\Entity\Player $players)
    {
        $this->players->removeElement($players);
    }

    /**
     * Get players
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlayers()
    {
        return $this->players;
    }
    
    /**
     * Add tactics
     *
     * @param \Mf\ManagerBundle\Entity\TacticDemarcation $tactics
     * @return Demarcation
     */
    public function addTactic(\Mf\ManagerBundle\Entity\TacticDemarcation $tactics)
    {
        $this->tactics[] = $tactics;
    
        return $this;
    }

    /**
     * Remove tactics
     *
     * @param \Mf\ManagerBundle\Entity\TacticDemarcation $tactics
     */
    public function removeTactic(\Mf\ManagerBundle\Entity\TacticDemarcation $tactics)
    {
        $this->tactics->removeElement($tactics);
    }

    /**
     * Get tactics
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTactics()
    {
        return $this->tactics;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->players = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tactics = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}