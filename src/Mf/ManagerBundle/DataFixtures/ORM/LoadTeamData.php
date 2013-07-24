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
                            'league_season' => 'La Liga - 2013/2014',
                            'user' => 'ACastilla'
                            ),
                        array(
                            'name' => 'Equipo2',
                            'league_season' => 'La Liga - 2013/2014',
                            'user' => 'Rai'
                            ),
                        array(
                            'name' => 'Equipo3',
                            'league_season' => 'La Liga - 2013/2014',
                            'user' => 'Arvin'
                            ),
                        array(
                            'name' => 'Equipo4',
                            'league_season' => 'La Liga - 2013/2014',
                            'user' => '7Sins'
                            ),
                        );
        foreach($teams as $item):
            $team = new Team();
            $team->setName($item['name']);
            $team->addLeagueSeason($this->getReference($item['league_season']));
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
        return 27; // the order in which fixtures will be loaded
    }
}

?>