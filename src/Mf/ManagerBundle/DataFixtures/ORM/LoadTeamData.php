<?php

namespace Mf\ManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mf\ManagerBundle\Entity\Team;

class LoadTeamData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $teams = array(
                        array(
                            'name' => 'Equipo1',
                            'league' => 'La Liga',
                            'user' => 'ACastilla'
                            ),
                        array(
                            'name' => 'Equipo2',
                            'league' => 'La Liga',
                            'user' => 'Rai'
                            ),
                        array(
                            'name' => 'Equipo3',
                            'league' => 'La Liga',
                            'user' => 'Arvin'
                            ),
                        array(
                            'name' => 'Equipo4',
                            'league' => 'La Liga',
                            'user' => '7Sins'
                            ),
                        );
        foreach($teams as $item):
            $team = new Team();
            $team->setName($item['name']);
            $team->setLeague($this->getReference($item['league']));
            $team->setUser($this->getReference($item['user']));

            $manager->persist($team);
        endforeach;
        
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 21; // the order in which fixtures will be loaded
    }
}

?>