<?php

namespace Mf\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Season
 *
 * @ORM\Table(name="mf_season")
 * @ORM\Entity
 */
class Season
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
     * @ORM\ManyToOne(targetEntity="League", inversedBy="seasons")
     * @ORM\JoinColumn(name="league_id", referencedColumnName="id", nullable=false)
     */
    private $league;

    /**
     * @ORM\OneToMany(targetEntity="MatchDay", mappedBy="season")
     */
    private $match_days;


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
     * @return Season
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
     * Set league
     *
     * @param \Mf\ManagerBundle\Entity\League $league
     * @return Season
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
     * Set calendar
     *
     * @param \Mf\ManagerBundle\Entity\Calendar $calendar
     * @return Season
     */
    public function setCalendar(\Mf\ManagerBundle\Entity\Calendar $calendar = null)
    {
        $this->calendar = $calendar;
    
        return $this;
    }

    /**
     * Get calendar
     *
     * @return \Mf\ManagerBundle\Entity\Calendar 
     */
    public function getCalendar()
    {
        return $this->calendar;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->match_days = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add match_days
     *
     * @param \Mf\ManagerBundle\Entity\MatchDay $matchDays
     * @return Season
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
}