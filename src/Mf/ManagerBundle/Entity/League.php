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
     * @ORM\OneToMany(targetEntity="LeagueSeason", mappedBy="league")
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
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->league_seasons = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add league_seasons
     *
     * @param \Mf\ManagerBundle\Entity\LeagueSeason $leagueSeasons
     * @return League
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