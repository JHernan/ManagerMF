<?php

namespace Mf\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\OneToMany(targetEntity="TacticDemarcation", mappedBy="tactic", cascade={"all"}, orphanRemoval=true)
     */
    private $demarcations;


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
     * Add demarcations
     *
     * @param \Mf\ManagerBundle\Entity\TacticDemarcation $demarcations
     * @return Tactic
     */
    public function addDemarcation(\Mf\ManagerBundle\Entity\TacticDemarcation $demarcations)
    {
        $this->demarcations[] = $demarcations;
    
        return $this;
    }

    /**
     * Remove demarcations
     *
     * @param \Mf\ManagerBundle\Entity\TacticDemarcation $demarcations
     */
    public function removeDemarcation(\Mf\ManagerBundle\Entity\TacticDemarcation $demarcations)
    {
        $this->demarcations->removeElement($demarcations);
    }

    /**
     * Get demarcations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDemarcations()
    {
        return $this->demarcations;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lineups = new \Doctrine\Common\Collections\ArrayCollection();
        $this->demarcations = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}