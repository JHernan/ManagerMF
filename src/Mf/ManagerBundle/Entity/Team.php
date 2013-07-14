<?php

namespace Mf\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table(name="mf_team")
 * @ORM\Entity(repositoryClass="Mf\ManagerBundle\Entity\TeamRepository")
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
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Mf\UserBundle\Entity\User", inversedBy="teams")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="League", inversedBy="teams")
     * @ORM\JoinColumn(name="league_id", referencedColumnName="id", nullable=false)
     */
    private $league;

    /**
     * @ORM\ManyToOne(targetEntity="Tactic", inversedBy="teams")
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
     * Set user_id
     *
     * @param \Mf\ManagerBundle\Entity\User $userId
     * @return Team
     */
    public function setUserId(\Mf\ManagerBundle\Entity\User $userId)
    {
        $this->user_id = $userId;
    
        return $this;
    }

    /**
     * Get user_id
     *
     * @return \Mf\ManagerBundle\Entity\User 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set league
     *
     * @param \Mf\ManagerBundle\Entity\League $league
     * @return Team
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
     * Set tactic
     *
     * @param \Mf\ManagerBundle\Entity\Tactic $tactic
     * @return Team
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