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
     * @ORM\OneToMany(targetEntity="TacticDemarcation", mappedBy="demarcation",cascade={"all"})
     */
    private $tactic_demarcations;


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
     * Constructor
     */
    public function __construct()
    {
        $this->tactics = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add tactic_demarcations
     *
     * @param \Mf\ManagerBundle\Entity\TacticDemarcation $tacticDemarcations
     * @return Demarcation
     */
    public function addTacticDemarcation(\Mf\ManagerBundle\Entity\TacticDemarcation $tacticDemarcations)
    {
        $this->tactic_demarcations[] = $tacticDemarcations;
    
        return $this;
    }

    /**
     * Remove tactic_demarcations
     *
     * @param \Mf\ManagerBundle\Entity\TacticDemarcation $tacticDemarcations
     */
    public function removeTacticDemarcation(\Mf\ManagerBundle\Entity\TacticDemarcation $tacticDemarcations)
    {
        $this->tactic_demarcations->removeElement($tacticDemarcations);
    }

    /**
     * Get tactic_demarcations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTacticDemarcations()
    {
        return $this->tactic_demarcations;
    }
}