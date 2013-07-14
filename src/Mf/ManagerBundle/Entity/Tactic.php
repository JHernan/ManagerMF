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
     * @ORM\ManyToOne(targetEntity="Lineup")
     * @ORM\JoinColumn(name="lineup_id", referencedColumnName="id", nullable=false)
     */
    private $lineup;

    /**
     * @ORM\OneToMany(targetEntity="Team", mappedBy="tactic")
     */
    private $teams;


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
     * Set lineup
     *
     * @param \Mf\ManagerBundle\Entity\Lineup $lineup
     * @return Tactic
     */
    public function setLineup(\Mf\ManagerBundle\Entity\Lineup $lineup)
    {
        $this->lineup = $lineup;
    
        return $this;
    }

    /**
     * Get lineup
     *
     * @return \Mf\ManagerBundle\Entity\Lineup 
     */
    public function getLineup()
    {
        return $this->lineup;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->teams = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add teams
     *
     * @param \Mf\ManagerBundle\Entity\Team $teams
     * @return Tactic
     */
    public function addTeam(\Mf\ManagerBundle\Entity\Team $teams)
    {
        $this->teams[] = $teams;
    
        return $this;
    }

    /**
     * Remove teams
     *
     * @param \Mf\ManagerBundle\Entity\Team $teams
     */
    public function removeTeam(\Mf\ManagerBundle\Entity\Team $teams)
    {
        $this->teams->removeElement($teams);
    }

    /**
     * Get teams
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTeams()
    {
        return $this->teams;
    }
}