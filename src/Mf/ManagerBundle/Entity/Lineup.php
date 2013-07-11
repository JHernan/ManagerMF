<?php

namespace Mf\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lineup
 *
 * @ORM\Table()
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
