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
     * @ORM\Column(name="start_date", type="datetime")
     */
    private $start_date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime")
     */
    private $end_date;

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
     * @ORM\ManyToOne(targetEntity="LeagueSeason", inversedBy="match_days")
     * @ORM\JoinColumn(name="league_season_id", referencedColumnName="id", nullable=false)
     */
    private $leagues_seasons;


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
        return (string) $this->getLeaguesSeasons()->getLeague()->getName() . ' - ' . $this->getLeaguesSeasons()->getSeason()->getName() . ' - ' . $this->getName();
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
     * Set start_date
     *
     * @param \DateTime $startDate
     * @return MatchDay
     */
    public function setStartDate($startDate)
    {
        $this->start_date = $startDate;

        return $this;
    }

    /**
     * Get start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Set end_date
     *
     * @param \DateTime $endDate
     * @return MatchDay
     */
    public function setEndDate($endDate)
    {
        $this->end_date = $endDate;

        return $this;
    }

    /**
     * Get end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->end_date;
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
     * Set leagues_seasons
     *
     * @param \Mf\ManagerBundle\Entity\LeagueSeason $leaguesSeasons
     * @return MatchDay
     */
    public function setLeaguesSeasons(\Mf\ManagerBundle\Entity\LeagueSeason $leaguesSeasons)
    {
        $this->leagues_seasons = $leaguesSeasons;

        return $this;
    }

    /**
     * Get leagues_seasons
     *
     * @return \Mf\ManagerBundle\Entity\LeagueSeason
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
        $this->lineups = new \Doctrine\Common\Collections\ArrayCollection();
        $this->player_points = new \Doctrine\Common\Collections\ArrayCollection();
        $this->team_points = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
