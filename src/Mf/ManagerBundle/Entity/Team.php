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
     * @ORM\ManyToMany(targetEntity="Tactic", mappedBy="teams")
     */
    private $tactics;


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
     * Constructor
     */
    public function __construct()
    {
        $this->tactics = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add tactics
     *
     * @param \Mf\ManagerBundle\Entity\Tactic $tactics
     * @return Team
     */
    public function addTactic(\Mf\ManagerBundle\Entity\Tactic $tactics)
    {
        $this->tactics[] = $tactics;
    
        return $this;
    }

    /**
     * Remove tactics
     *
     * @param \Mf\ManagerBundle\Entity\Tactic $tactics
     */
    public function removeTactic(\Mf\ManagerBundle\Entity\Tactic $tactics)
    {
        $this->tactics->removeElement($tactics);
    }

    /**
     * Get tactics
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTactics()
    {
        return $this->tactics;
    }
}