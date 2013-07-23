<?php

namespace Mf\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Season
 *
 * @ORM\Table(name="mf_season")
 * @ORM\Entity
 */
class Season
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
     * @ORM\OneToMany(targetEntity="MatchDay", mappedBy="season")
     */
    private $match_days;

    /**
     * @ORM\OneToMany(targetEntity="LeagueSeason", mappedBy="season")
     */
    private $league_seasons;


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
     * Constructor
     */
    public function __construct()
    {
        $this->match_days = new \Doctrine\Common\Collections\ArrayCollection();
        $this->league_seasons = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Season
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
     * Add match_days
     *
     * @param \Mf\ManagerBundle\Entity\MatchDay $matchDays
     * @return Season
     */
    public function addMatchDay(\Mf\ManagerBundle\Entity\MatchDay $matchDays)
    {
        $this->match_days[] = $matchDays;
    
        return $this;
    }

    /**
     * Remove match_days
     *
     * @param \Mf\ManagerBundle\Entity\MatchDay $matchDays
     */
    public function removeMatchDay(\Mf\ManagerBundle\Entity\MatchDay $matchDays)
    {
        $this->match_days->removeElement($matchDays);
    }

    /**
     * Get match_days
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMatchDays()
    {
        return $this->match_days;
    }

    /**
     * Add league_seasons
     *
     * @param \Mf\ManagerBundle\Entity\LeagueSeason $leagueSeasons
     * @return Season
     */
    public function addLeagueSeason(\Mf\ManagerBundle\Entity\LeagueSeason $leagueSeasons)
    {
        $this->league_seasons[] = $leagueSeasons;
    
        return $this;
    }

    /**
     * Remove league_seasons
     *
     * @param \Mf\ManagerBundle\Entity\LeagueSeason $leagueSeasons
     */
    public function removeLeagueSeason(\Mf\ManagerBundle\Entity\LeagueSeason $leagueSeasons)
    {
        $this->league_seasons->removeElement($leagueSeasons);
    }

    /**
     * Get league_seasons
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLeagueSeasons()
    {
        return $this->league_seasons;
    }
    
}