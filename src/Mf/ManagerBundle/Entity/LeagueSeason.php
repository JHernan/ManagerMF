<?php

namespace Mf\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LeagueSeason
 *
 * @ORM\Table(name="mf_leagues_seasons")
 * @ORM\Entity(repositoryClass="Mf\ManagerBundle\Entity\LeagueSeasonRepository")
 */
class LeagueSeason
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
     * @ORM\ManyToOne(targetEntity="League", inversedBy="seasons")
     * @ORM\JoinColumn(name="league_id", referencedColumnName="id", nullable=false)
     */
    private $league;

    /**
     * @ORM\ManyToOne(targetEntity="Season", inversedBy="leagues")
     * @ORM\JoinColumn(name="season_id", referencedColumnName="id", nullable=false)
     */
    private $season;

    /**
     * @ORM\ManyToMany(targetEntity="Team", mappedBy="leagues_seasons")
     */
    private $teams;

    /**
     * @ORM\ManyToMany(targetEntity="FootballTeam", mappedBy="leagues_seasons")
     */
    private $football_teams;

    /**
     * @ORM\OneToMany(targetEntity="MatchDay", mappedBy="leagues_seasons")
     */
    private $match_days;

    /**
     * @ORM\OneToMany(targetEntity="Honour", mappedBy="leagues_seasons")
     */
    private $honours;


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
        return (string) $this->getLeague()->getName() . ' - ' . $this->getSeason()->getName();
    }

    /**
     * Set league
     *
     * @param \Mf\ManagerBundle\Entity\League $league
     * @return LeagueSeason
     */
    public function setLeague(\Mf\ManagerBundle\Entity\League $league)
    {
        $this->league = $league;

        return $this;
    }

    /**
     * Get league
     *
     * @return \Mf\ManagerBundle\Entity\League
     */
    public function getLeague()
    {
        return $this->league;
    }

    /**
     * Set season
     *
     * @param \Mf\ManagerBundle\Entity\Season $season
     * @return LeagueSeason
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

    /**
     * Add teams
     *
     * @param \Mf\ManagerBundle\Entity\Team $teams
     * @return LeagueSeason
     */
    public function addTeam(\Mf\ManagerBundle\Entity\Team $teams)
    {
        $this->teams[] = $teams;

        return $this;
    }

    /**
     * Remove teams
     *
     * @param \Mf\ManagerBundle\Entity\Team $teams
     */
    public function removeTeam(\Mf\ManagerBundle\Entity\Team $teams)
    {
        $this->teams->removeElement($teams);
    }

    /**
     * Get teams
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTeams()
    {
        return $this->teams;
    }

    /**
     * Add football_teams
     *
     * @param \Mf\ManagerBundle\Entity\FootballTeam $footballTeams
     * @return LeagueSeason
     */
    public function addFootballTeam(\Mf\ManagerBundle\Entity\FootballTeam $footballTeams)
    {
        $this->football_teams[] = $footballTeams;

        return $this;
    }

    /**
     * Remove football_teams
     *
     * @param \Mf\ManagerBundle\Entity\FootballTeam $footballTeams
     */
    public function removeFootballTeam(\Mf\ManagerBundle\Entity\FootballTeam $footballTeams)
    {
        $this->football_teams->removeElement($footballTeams);
    }

    /**
     * Get football_teams
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFootballTeams()
    {
        return $this->football_teams;
    }


    /**
     * Add match_days
     *
     * @param \Mf\ManagerBundle\Entity\MatchDay $matchDays
     * @return LeagueSeason
     */
    public function addMatchDay(\Mf\ManagerBundle\Entity\MatchDay $matchDays)
    {
        $this->match_days[] = $matchDays;

        return $this;
    }

    /**
     * Remove match_days
     *
     * @param \Mf\ManagerBundle\Entity\MatchDay $matchDays
     */
    public function removeMatchDay(\Mf\ManagerBundle\Entity\MatchDay $matchDays)
    {
        $this->match_days->removeElement($matchDays);
    }

    /**
     * Get match_days
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMatchDays()
    {
        return $this->match_days;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->teams = new \Doctrine\Common\Collections\ArrayCollection();
        $this->football_teams = new \Doctrine\Common\Collections\ArrayCollection();
        $this->match_days = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Add honours
     *
     * @param \Mf\ManagerBundle\Entity\Honour $honours
     * @return LeagueSeason
     */
    public function addHonour(\Mf\ManagerBundle\Entity\Honour $honours)
    {
        $this->honours[] = $honours;

        return $this;
    }

    /**
     * Remove honours
     *
     * @param \Mf\ManagerBundle\Entity\Honour $honours
     */
    public function removeHonour(\Mf\ManagerBundle\Entity\Honour $honours)
    {
        $this->honours->removeElement($honours);
    }

    /**
     * Get honours
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHonours()
    {
        return $this->honours;
    }
}
