<?php

namespace Mf\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table(name="mf_team")
 * @ORM\Entity(repositoryClass="Mf\ManagerBundle\Entity\TeamRepository")
 */
class Team
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
     * @ORM\ManyToOne(targetEntity="Mf\UserBundle\Entity\User", inversedBy="teams")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="LeagueSeason", inversedBy="teams")
     * @ORM\JoinColumn(name="league_season_id", referencedColumnName="id", nullable=false)
     */
    private $league_season;

    /**
     * @ORM\ManyToMany(targetEntity="Tactic", mappedBy="teams")
     */
    private $tactics;

    /**
     * @ORM\OneToMany(targetEntity="TeamPlayer", mappedBy="team")
     */
    private $team_players;

    /**
     * @ORM\OneToMany(targetEntity="TeamPoint", mappedBy="team")
     */
    private $team_points;


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
     * @return Team
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
     * Set user
     *
     * @param \Mf\UserBundle\Entity\User $user
     * @return Team
     */
    public function setUser(\Mf\UserBundle\Entity\User $user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Mf\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tactics = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add tactics
     *
     * @param \Mf\ManagerBundle\Entity\Tactic $tactics
     * @return Team
     */
    public function addTactic(\Mf\ManagerBundle\Entity\Tactic $tactics)
    {
        $this->tactics[] = $tactics;
    
        return $this;
    }

    /**
     * Remove tactics
     *
     * @param \Mf\ManagerBundle\Entity\Tactic $tactics
     */
    public function removeTactic(\Mf\ManagerBundle\Entity\Tactic $tactics)
    {
        $this->tactics->removeElement($tactics);
    }

    /**
     * Get tactics
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTactics()
    {
        return $this->tactics;
    }

    /**
     * Add team_players
     *
     * @param \Mf\ManagerBundle\Entity\TeamPlayer $teamPlayers
     * @return Team
     */
    public function addTeamPlayer(\Mf\ManagerBundle\Entity\TeamPlayer $teamPlayers)
    {
        $this->team_players[] = $teamPlayers;
    
        return $this;
    }

    /**
     * Remove team_players
     *
     * @param \Mf\ManagerBundle\Entity\TeamPlayer $teamPlayers
     */
    public function removeTeamPlayer(\Mf\ManagerBundle\Entity\TeamPlayer $teamPlayers)
    {
        $this->team_players->removeElement($teamPlayers);
    }

    /**
     * Get team_players
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTeamPlayers()
    {
        return $this->team_players;
    }

    /**
     * Add team_points
     *
     * @param \Mf\ManagerBundle\Entity\TeamPoint $teamPoints
     * @return Team
     */
    public function addTeamPoint(\Mf\ManagerBundle\Entity\TeamPoint $teamPoints)
    {
        $this->team_points[] = $teamPoints;
    
        return $this;
    }

    /**
     * Remove team_points
     *
     * @param \Mf\ManagerBundle\Entity\TeamPoint $teamPoints
     */
    public function removeTeamPoint(\Mf\ManagerBundle\Entity\TeamPoint $teamPoints)
    {
        $this->team_points->removeElement($teamPoints);
    }

    /**
     * Get team_points
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTeamPoints()
    {
        return $this->team_points;
    }

    /**
     * Set league_season
     *
     * @param \Mf\ManagerBundle\Entity\LeagueSeason $leagueSeason
     * @return Team
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