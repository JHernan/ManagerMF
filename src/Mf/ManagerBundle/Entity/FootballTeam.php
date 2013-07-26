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
     * @ORM\JoinTable(name="mf_football_teams_leagues_seasons")
     */
    private $leagues_seasons;

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
     * Add leagues_seasons
     *
     * @param \Mf\ManagerBundle\Entity\LeagueSeason $leaguesSeasons
     * @return FootballTeam
     */
    public function addLeaguesSeason(\Mf\ManagerBundle\Entity\LeagueSeason $leaguesSeasons)
    {
        $this->leagues_seasons[] = $leaguesSeasons;
    
        return $this;
    }

    /**
     * Remove leagues_seasons
     *
     * @param \Mf\ManagerBundle\Entity\LeagueSeason $leaguesSeasons
     */
    public function removeLeaguesSeason(\Mf\ManagerBundle\Entity\LeagueSeason $leaguesSeasons)
    {
        $this->leagues_seasons->removeElement($leaguesSeasons);
    }

    /**
     * Get leagues_seasons
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLeaguesSeasons()
    {
        return $this->leagues_seasons;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->leagues_seasons = new \Doctrine\Common\Collections\ArrayCollection();
        $this->players = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}