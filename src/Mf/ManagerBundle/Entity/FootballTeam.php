<?php

namespace Mf\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FootballTeam
 *
 * @ORM\Table(name="mf_football_team")
 * @ORM\Entity(repositoryClass="Mf\ManagerBundle\Entity\FootballTeamRepository")
 */
class FootballTeam
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
     * @ORM\ManyToMany(targetEntity="LeagueSeason", inversedBy="football_teams")
     * @ORM\JoinTable(name="mf_football_teams_league_seasons")
     */
    private $league_seasons;

    /**
     * @ORM\OneToMany(targetEntity="Player", mappedBy="football_team")
     */
    private $players;


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
     * @return FootballTeam
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

    public function __toString()
    {
        return (string) $this->getName();
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->players = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add players
     *
     * @param \Mf\ManagerBundle\Entity\Player $players
     * @return FootballTeam
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
     * Add league_seasons
     *
     * @param \Mf\ManagerBundle\Entity\LeagueSeason $leagueSeasons
     * @return FootballTeam
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