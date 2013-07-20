<?php

namespace Mf\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamPoint
 *
 * @ORM\Table(name="mf_team_point")
 * @ORM\Entity
 */
class TeamPoint
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
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="team_points")
     * @ORM\JoinColumn(name="team_id", referencedColumnName="id", nullable=false)
     */
    private $team;

    /**
     * @ORM\ManyToOne(targetEntity="MatchDay", inversedBy="team_points")
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
     * @return TeamPoint
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
     * Set team
     *
     * @param \Mf\ManagerBundle\Entity\Team $team
     * @return TeamPoint
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

    /**
     * Set match_day
     *
     * @param \Mf\ManagerBundle\Entity\MatchDay $matchDay
     * @return TeamPoint
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