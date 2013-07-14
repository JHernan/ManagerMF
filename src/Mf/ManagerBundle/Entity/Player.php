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
     * @ORM\ManyToOne(targetEntity="FootballTeam", inversedBy="players")
     * @ORM\JoinColumn(name="football_team_id", referencedColumnName="id", nullable=false)
     */
    private $football_team;


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
}