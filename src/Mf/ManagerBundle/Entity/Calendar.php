<?php

namespace Mf\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calendar
 *
 * @ORM\Table(name="mf_calendar")
 * @ORM\Entity(repositoryClass="Mf\ManagerBundle\Entity\CalendarRepository")
 */
class Calendar
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
     * @ORM\ManyToOne(targetEntity="League")
     * @ORM\JoinColumn(name="league_id", referencedColumnName="id", nullable=false)
     */
    private $league;

    /**
     * @ORM\ManyToOne(targetEntity="Season")
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
     * @return Calendar
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
     * @return Calendar
     */
    public function setLeague(\Mf\ManagerBundle\Entity\League $league = null)
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
     * @return Calendar
     */
    public function setSeason(\Mf\ManagerBundle\Entity\Season $season = null)
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