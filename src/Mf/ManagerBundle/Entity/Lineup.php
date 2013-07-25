<?php

namespace Mf\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lineup
 *
 * @ORM\Table(name="mf_lineup")
 * @ORM\Entity(repositoryClass="Mf\ManagerBundle\Entity\LineupRepository")
 */
class Lineup
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
     * @ORM\ManyToOne(targetEntity="MatchDay", inversedBy="lineups")
     * @ORM\JoinColumn(name="match_day_id", referencedColumnName="id", nullable=false)
     */
    private $match_day;

    /**
     * @ORM\ManyToOne(targetEntity="Tactic", inversedBy="lineups")
     * @ORM\JoinColumn(name="tactic_id", referencedColumnName="id", nullable=false)
     */
    private $tactic;

    /**
     * @ORM\ManyToMany(targetEntity="TeamPlayer", inversedBy="lineups")
     * @ORM\JoinTable(name="mf_lineups_teamplayers")
     */
    private $team_players;

    /**
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="lineups")
     * @ORM\JoinColumn(name="team_id", referencedColumnName="id", nullable=false)
     */
    private $team;


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
     * Set match_day
     *
     * @param \Mf\ManagerBundle\Entity\MatchDay $matchDay
     * @return Lineup
     */
    public function setMatchDay(\Mf\ManagerBundle\Entity\MatchDay $matchDay)
    {
        $this->match_day = $matchDay;
    
        return $this;
    }

    /**
     * Get match_day
     *
     * @return \Mf\ManagerBundle\Entity\MatchDay 
     */
    public function getMatchDay()
    {
        return $this->match_day;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tactics = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set tactic
     *
     * @param \Mf\ManagerBundle\Entity\Tactic $tactic
     * @return Lineup
     */
    public function setTactic(\Mf\ManagerBundle\Entity\Tactic $tactic)
    {
        $this->tactic = $tactic;
    
        return $this;
    }

    /**
     * Get tactic
     *
     * @return \Mf\ManagerBundle\Entity\Tactic 
     */
    public function getTactic()
    {
        return $this->tactic;
    }

    /**
     * Add team_players
     *
     * @param \Mf\ManagerBundle\Entity\TeamPlayer $teamPlayers
     * @return Lineup
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
     * Set team
     *
     * @param \Mf\ManagerBundle\Entity\Team $team
     * @return Lineup
     */
    public function setTeam(\Mf\ManagerBundle\Entity\Team $team)
    {
        $this->team = $team;
    
        return $this;
    }

    /**
     * Get team
     *
     * @return \Mf\ManagerBundle\Entity\Team 
     */
    public function getTeam()
    {
        return $this->team;
    }
}