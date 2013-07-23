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
     * @ORM\ManyToOne(targetEntity="LeagueSeason", inversedBy="football_teams")
     * @ORM\JoinColumn(name="league_season_id", referencedColumnName="id", nullable=false)
     */
    private $league_season;

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
     * Set league_season
     *
     * @param \Mf\ManagerBundle\Entity\LeagueSeason $leagueSeason
     * @return FootballTeam
     */
    public function setLeagueSeason(\Mf\ManagerBundle\Entity\LeagueSeason $leagueSeason)
    {
        $this->league_season = $leagueSeason;
    
        return $this;
    }

    /**
     * Get league_season
     *
     * @return \Mf\ManagerBundle\Entity\LeagueSeason 
     */
    public function getLeagueSeason()
    {
        return $this->league_season;
    }
}