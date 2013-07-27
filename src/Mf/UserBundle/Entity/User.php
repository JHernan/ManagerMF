<?php

namespace Mf\UserBundle\Entity;

use Sonata\UserBundle\Entity\BaseUser as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="Mf\ManagerBundle\Entity\Team", mappedBy="user")
     */
    private $teams;

    /**
     * @ORM\OneToMany(targetEntity="Mf\ManagerBundle\Entity\Honour", mappedBy="user")
     */
    private $honours;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function setSalt($salt){
        $this->salt = $salt;
    }

    /**
     * Add teams
     *
     * @param \Mf\ManagerBundle\Entity\Team $teams
     * @return User
     */
    public function addTeam(\Mf\ManagerBundle\Entity\Team $teams)
    {
        $this->teams[] = $teams;
    
        return $this;
    }

    /**
     * Remove teams
     *
     * @param \Mf\UserBundle\Entity\Team $teams
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
     * Add honours
     *
     * @param \Mf\ManagerBundle\Entity\Honour $honours
     * @return User
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