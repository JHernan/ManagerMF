<?php

namespace Mf\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * Team
 *
 * @ORM\Table(name="mf_team")
 * @ORM\Entity(repositoryClass="Mf\ManagerBundle\Entity\TeamRepository")
 * @ExclusionPolicy("all")
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
     * @Expose
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Mf\UserBundle\Entity\User", inversedBy="teams")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToMany(targetEntity="LeagueSeason", inversedBy="teams")
     * @ORM\JoinTable(name="mf_teams_leagues_seasons")
     */
    private $leagues_seasons;

    /**
     * @ORM\OneToMany(targetEntity="TeamPlayer", mappedBy="team")
     */
    private $team_players;

    /**
     * @ORM\OneToMany(targetEntity="TeamPoint", mappedBy="team")
     */
    private $team_points;

    /**
     * @ORM\OneToMany(targetEntity="Lineup", mappedBy="team")
     */
    private $lineups;


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
     * Add lineups
     *
     * @param \Mf\ManagerBundle\Entity\Lineup $lineups
     * @return Team
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
     * Add leagues_seasons
     *
     * @param \Mf\ManagerBundle\Entity\LeagueSeason $leaguesSeasons
     * @return Team
     */
    public function addLeaguesSeason(\Mf\ManagerBundle\Entity\LeagueSeason $leaguesSeasons)
    {
        $this->leagues_seasons[] = $leaguesSeasons;

        return $this;
    }

    /**
     * Remove leagues_seasons
     *
     * @param \Mf\ManagerBundle\Entity\LeagueSeason $leaguesSeasons
     */
    public function removeLeaguesSeason(\Mf\ManagerBundle\Entity\LeagueSeason $leaguesSeasons)
    {
        $this->leagues_seasons->removeElement($leaguesSeasons);
    }

    /**
     * Get leagues_seasons
     *
     * @return \Doctrine\Common\Collections\Collection
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
        $this->leagues_seasons = new \Doctrine\Common\Collections\ArrayCollection();
        $this->team_players = new \Doctrine\Common\Collections\ArrayCollection();
        $this->team_points = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lineups = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
