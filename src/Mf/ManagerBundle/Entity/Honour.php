<?php

namespace Mf\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Honour
 *
 * @ORM\Table(name="mf_honour")
 * @ORM\Entity(repositoryClass="Mf\ManagerBundle\Entity\HonourRepository")
 */
class Honour
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
     * @ORM\Column(name="position", type="integer")
     */
    private $position;


    /**
     * @ORM\ManyToOne(targetEntity="Mf\UserBundle\Entity\User", inversedBy="honours")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="LeagueSeason", inversedBy="honours")
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
        return (string) $this->getUser()->getUsername() . ' - ' . $this->getLeaguesSeasons();
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return Honour
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set user
     *
     * @param \Mf\UserBundle\Entity\User $user
     * @return Honour
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
     * Set leagues_seasons
     *
     * @param \Mf\ManagerBundle\Entity\LeagueSeason $leaguesSeasons
     * @return Honour
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
}
