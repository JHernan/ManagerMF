<?php

namespace Mf\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TacticDemarcation
 *
 * @ORM\Table(name="mf_tactics_demarcations")
 * @ORM\Entity(repositoryClass="Mf\ManagerBundle\Entity\TacticDemarcationRepository")
 */
class TacticDemarcation
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
     * @ORM\ManyToOne(targetEntity="Tactic", inversedBy="demarcations")
     * @ORM\JoinColumn(name="tactic_id", referencedColumnName="id", nullable=false)
     */
    private $tactic;

    /**
     * @ORM\ManyToOne(targetEntity="Demarcation", inversedBy="tactics")
     * @ORM\JoinColumn(name="demarcation_id", referencedColumnName="id", nullable=false)
     */
    private $demarcation;


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
        return (string) $this->getTactic()->getName() . ' - ' . $this->getDemarcation()->getName();
    }

    /**
     * Set tactic
     *
     * @param \Mf\ManagerBundle\Entity\Tactic $tactic
     * @return TacticDemarcation
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

    /**
     * Set demarcation
     *
     * @param \Mf\ManagerBundle\Entity\Demarcation $demarcation
     * @return TacticDemarcation
     */
    public function setDemarcation(\Mf\ManagerBundle\Entity\Demarcation $demarcation)
    {
        $this->demarcation = $demarcation;
    
        return $this;
    }

    /**
     * Get demarcation
     *
     * @return \Mf\ManagerBundle\Entity\Demarcation 
     */
    public function getDemarcation()
    {
        return $this->demarcation;
    }
}