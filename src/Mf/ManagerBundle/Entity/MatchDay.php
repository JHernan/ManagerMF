<?php

namespace Mf\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MatchDay
 *
 * @ORM\Table(name="mf_match_day")
 * @ORM\Entity(repositoryClass="Mf\ManagerBundle\Entity\MatchDayRepository")
 */
class MatchDay
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\OneToMany(targetEntity="Lineup", mappedBy="match_day")
     */
    private $lineups;

    /**
     * @ORM\OneToMany(targetEntity="PlayerPoint", mappedBy="match_day")
     */
    private $player_points;

    /**
     * @ORM\OneToMany(targetEntity="TeamPoint", mappedBy="match_day")
     */
    private $team_points;

    /**
     * @ORM\ManyToOne(targetEntity="Season", inversedBy="match_days")
     * @ORM\JoinColumn(name="season_id", referencedColumnName="id", nullable=false)
     */
    private $season;


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
     * @return MatchDay
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
     * Set date
     *
     * @param \DateTime $date
     * @return MatchDay
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
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
     * @return MatchDay
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
     * @return MatchDay
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

    /**
     * Add team_points
     *
     * @param \Mf\ManagerBundle\Entity\TeamPoint $teamPoints
     * @return MatchDay
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
     * Set season
     *
     * @param \Mf\ManagerBundle\Entity\Season $season
     * @return MatchDay
     */
    public function setSeason(\Mf\ManagerBundle\Entity\Season $season)
    {
        $this->season = $season;
    
        return $this;
    }

    /**
     * Get season
     *
     * @return \Mf\ManagerBundle\Entity\Season 
     */
    public function getSeason()
    {
        return $this->season;
    }
}