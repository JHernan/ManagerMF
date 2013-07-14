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
     * @ORM\ManyToOne(targetEntity="Calendar")
     * @ORM\JoinColumn(name="calendar_id", referencedColumnName="id", nullable=false)
     */
    private $calendar;


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
     * Set calendar
     *
     * @param \Mf\ManagerBundle\Entity\Calendar $calendar
     * @return MatchDay
     */
    public function setCalendar(\Mf\ManagerBundle\Entity\Calendar $calendar)
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
}