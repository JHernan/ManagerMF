<?php

namespace Mf\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * League
 *
 * @ORM\Table(name="mf_league")
 * @ORM\Entity
 */
class League
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
     * @ORM\OneToMany(targetEntity="Season", mappedBy="league")
     */
    private $seasons;

    /**
     * @ORM\OneToMany(targetEntity="Team", mappedBy="league")
     */
    private $teams;

    /**
     * @ORM\OneToMany(targetEntity="FootballTeam", mappedBy="league")
     */
    private $football_teams;


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
     * @return League
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
        $this->seasons = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add seasons
     *
     * @param \Mf\ManagerBundle\Entity\Season $seasons
     * @return League
     */
    public function addSeason(\Mf\ManagerBundle\Entity\Season $seasons)
    {
        $this->seasons[] = $seasons;
    
        return $this;
    }

    /**
     * Remove seasons
     *
     * @param \Mf\ManagerBundle\Entity\Season $seasons
     */
    public function removeSeason(\Mf\ManagerBundle\Entity\Season $seasons)
    {
        $this->seasons->removeElement($seasons);
    }

    /**
     * Get seasons
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSeasons()
    {
        return $this->seasons;
    }

    /**
     * Add teams
     *
     * @param \Mf\ManagerBundle\Entity\Team $teams
     * @return League
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

    /**
     * Add football_teams
     *
     * @param \Mf\ManagerBundle\Entity\FootballTeam $footballTeams
     * @return League
     */
    public function addFootballTeam(\Mf\ManagerBundle\Entity\FootballTeam $footballTeams)
    {
        $this->football_teams[] = $footballTeams;
    
        return $this;
    }

    /**
     * Remove football_teams
     *
     * @param \Mf\ManagerBundle\Entity\FootballTeam $footballTeams
     */
    public function removeFootballTeam(\Mf\ManagerBundle\Entity\FootballTeam $footballTeams)
    {
        $this->football_teams->removeElement($footballTeams);
    }

    /**
     * Get football_teams
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFootballTeams()
    {
        return $this->football_teams;
    }
}