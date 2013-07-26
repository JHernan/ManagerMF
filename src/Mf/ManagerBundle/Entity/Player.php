<?php

namespace Mf\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Player
 *
 * @ORM\Table(name="mf_player")
 * @ORM\Entity(repositoryClass="Mf\ManagerBundle\Entity\PlayerRepository")
 */
class Player
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
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

    /**
     * @ORM\ManyToOne(targetEntity="FootballTeam", inversedBy="players")
     * @ORM\JoinColumn(name="football_team_id", referencedColumnName="id", nullable=false)
     */
    private $football_team;

    /**
     * @ORM\ManyToMany(targetEntity="Demarcation", mappedBy="players")
     */
    private $demarcations;

    /**
     * @ORM\OneToMany(targetEntity="TeamPlayer", mappedBy="player")
     */
    private $team_players;


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
     * @return Player
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
     * Set active
     *
     * @param boolean $active
     * @return Player
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set football_team
     *
     * @param \Mf\ManagerBundle\Entity\FootballTeam $footballTeam
     * @return Player
     */
    public function setFootballTeam(\Mf\ManagerBundle\Entity\FootballTeam $footballTeam)
    {
        $this->football_team = $footballTeam;
    
        return $this;
    }

    /**
     * Get football_team
     *
     * @return \Mf\ManagerBundle\Entity\FootballTeam 
     */
    public function getFootballTeam()
    {
        return $this->football_team;
    }
        
    /**
     * Add demarcations
     *
     * @param \Mf\ManagerBundle\Entity\Demarcation $demarcations
     * @return Player
     */
    public function addDemarcation(\Mf\ManagerBundle\Entity\Demarcation $demarcations)
    {
        $this->demarcations[] = $demarcations;
    
        return $this;
    }

    /**
     * Remove demarcations
     *
     * @param \Mf\ManagerBundle\Entity\Demarcation $demarcations
     */
    public function removeDemarcation(\Mf\ManagerBundle\Entity\Demarcation $demarcations)
    {
        $this->demarcations->removeElement($demarcations);
    }

    /**
     * Get demarcations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDemarcations()
    {
        return $this->demarcations;
    }

    /**
     * Add team_players
     *
     * @param \Mf\ManagerBundle\Entity\TeamPlayer $teamPlayers
     * @return Player
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
     * Constructor
     */
    public function __construct()
    {
        $this->demarcations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->team_players = new \Doctrine\Common\Collections\ArrayCollection();
    }
}