<?php

namespace Mf\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Tactic
 *
 * @ORM\Table(name="mf_tactic")
 * @ORM\Entity
 */
class Tactic
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
     * @ORM\OneToMany(targetEntity="Lineup", mappedBy="tactic")
     */
    private $lineups;

    /**
     * @ORM\OneToMany(targetEntity="TacticDemarcation", mappedBy="tactic",cascade={"all"}, orphanRemoval=true)
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
     * @return Tactic
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
        $this->teams = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add lineups
     *
     * @param \Mf\ManagerBundle\Entity\Lineup $lineups
     * @return Tactic
     */
    public function addLineup(\Mf\ManagerBundle\Entity\Lineup $lineups)
    {
        $this->lineups[] = $lineups;
    
        return $this;
    }

    /**
     * Remove lineups
     *
     * @param \Mf\ManagerBundle\Entity\Lineup $lineups
     */
    public function removeLineup(\Mf\ManagerBundle\Entity\Lineup $lineups)
    {
        $this->lineups->removeElement($lineups);
    }

    /**
     * Get lineups
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLineups()
    {
        return $this->lineups;
    }

    /**
     * Add tactic_demarcations
     *
     * @param \Mf\ManagerBundle\Entity\TacticDemarcation $tacticDemarcations
     * @return Tactic
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