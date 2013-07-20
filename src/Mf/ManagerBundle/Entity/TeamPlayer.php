<?php

namespace Mf\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamPlayer
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TeamPlayer
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
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="team_players")
     * @ORM\JoinColumn(name="team_id", referencedColumnName="id", nullable=false)
     */
    private $team;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="team_players")
     * @ORM\JoinColumn(name="player_id", referencedColumnName="id", nullable=false)
     */
    private $player;

    /**
     * @ORM\ManyToMany(targetEntity="Lineup", mappedBy="team_players")
     */
    private $lineups;

    /**
     * @ORM\OneToMany(targetEntity="PlayerPoint", mappedBy="team_player")
     */
    private $player_points;


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
     * Set team
     *
     * @param \Mf\ManagerBundle\Entity\Team $team
     * @return TeamPlayer
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
     * Set player
     *
     * @param \Mf\ManagerBundle\Entity\Player $player
     * @return TeamPlayer
     */
    public function setPlayer(\Mf\ManagerBundle\Entity\Player $player)
    {
        $this->player = $player;
    
        return $this;
    }

    /**
     * Get player
     *
     * @return \Mf\ManagerBundle\Entity\Player 
     */
    public function getPlayer()
    {
        return $this->player;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lineups = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add lineups
     *
     * @param \Mf\ManagerBundle\Entity\Lineup $lineups
     * @return TeamPlayer
     */
    public function addLineup(\Mf\ManagerBundle\Entity\Lineup $lineups)
    {
        $this->lineups[] = $lineups;
    
        return $this;
    }

    /**
     * Remove lineups
     *
     * @param \Mf\ManagerBundle\Entity\Lineup $lineups
     */
    public function removeLineup(\Mf\ManagerBundle\Entity\Lineup $lineups)
    {
        $this->lineups->removeElement($lineups);
    }

    /**
     * Get lineups
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLineups()
    {
        return $this->lineups;
    }

    /**
     * Add player_points
     *
     * @param \Mf\ManagerBundle\Entity\PlayerPoint $playerPoints
     * @return TeamPlayer
     */
    public function addPlayerPoint(\Mf\ManagerBundle\Entity\PlayerPoint $playerPoints)
    {
        $this->player_points[] = $playerPoints;
    
        return $this;
    }

    /**
     * Remove player_points
     *
     * @param \Mf\ManagerBundle\Entity\PlayerPoint $playerPoints
     */
    public function removePlayerPoint(\Mf\ManagerBundle\Entity\PlayerPoint $playerPoints)
    {
        $this->player_points->removeElement($playerPoints);
    }

    /**
     * Get player_points
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlayerPoints()
    {
        return $this->player_points;
    }
}