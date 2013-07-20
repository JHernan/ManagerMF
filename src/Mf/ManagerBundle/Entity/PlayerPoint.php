<?php

namespace Mf\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerPoint
 *
 * @ORM\Table(name="mf_player_point")
 * @ORM\Entity
 */
class PlayerPoint
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
     * @var integer
     *
     * @ORM\Column(name="points", type="integer")
     */
    private $points;

    /**
     * @ORM\ManyToOne(targetEntity="TeamPlayer", inversedBy="team_players")
     * @ORM\JoinColumn(name="team_player_id", referencedColumnName="id", nullable=false)
     */
    private $team_player;

    /**
     * @ORM\ManyToOne(targetEntity="MatchDay", inversedBy="team_players")
     * @ORM\JoinColumn(name="match_day_id", referencedColumnName="id", nullable=false)
     */
    private $match_day;


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
     * Set points
     *
     * @param integer $points
     * @return PlayerPoint
     */
    public function setPoints($points)
    {
        $this->points = $points;
    
        return $this;
    }

    /**
     * Get points
     *
     * @return integer 
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set team_player
     *
     * @param \Mf\ManagerBundle\Entity\TeamPlayer $teamPlayer
     * @return PlayerPoint
     */
    public function setTeamPlayer(\Mf\ManagerBundle\Entity\TeamPlayer $teamPlayer)
    {
        $this->team_player = $teamPlayer;
    
        return $this;
    }

    /**
     * Get team_player
     *
     * @return \Mf\ManagerBundle\Entity\TeamPlayer 
     */
    public function getTeamPlayer()
    {
        return $this->team_player;
    }

    /**
     * Set match_day
     *
     * @param \Mf\ManagerBundle\Entity\MatchDay $matchDay
     * @return PlayerPoint
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
}