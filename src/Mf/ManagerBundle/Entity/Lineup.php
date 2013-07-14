<?php

namespace Mf\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lineup
 *
 * @ORM\Table(name="mf_lineup")
 * @ORM\Entity(repositoryClass="Mf\ManagerBundle\Entity\LineupRepository")
 */
class Lineup
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
     * @ORM\ManyToOne(targetEntity="MatchDay", inversedBy="lineups")
     * @ORM\JoinColumn(name="match_day_id", referencedColumnName="id", nullable=false)
     */
    private $match_day;

    /**
     * @ORM\ManyToOne(targetEntity="Tactic", inversedBy="lineups")
     * @ORM\JoinColumn(name="tactic_id", referencedColumnName="id", nullable=false)
     */
    private $tactic;


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
     * Set match_day
     *
     * @param \Mf\ManagerBundle\Entity\MatchDay $matchDay
     * @return Lineup
     */
    public function setMatchDay(\Mf\ManagerBundle\Entity\MatchDay $matchDay)
    {
        $this->match_day = $matchDay;
    
        return $this;
    }

    /**
     * Get match_day
     *
     * @return \Mf\ManagerBundle\Entity\MatchDay 
     */
    public function getMatchDay()
    {
        return $this->match_day;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tactics = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set tactic
     *
     * @param \Mf\ManagerBundle\Entity\Tactic $tactic
     * @return Lineup
     */
    public function setTactic(\Mf\ManagerBundle\Entity\Tactic $tactic)
    {
        $this->tactic = $tactic;
    
        return $this;
    }

    /**
     * Get tactic
     *
     * @return \Mf\ManagerBundle\Entity\Tactic 
     */
    public function getTactic()
    {
        return $this->tactic;
    }
}