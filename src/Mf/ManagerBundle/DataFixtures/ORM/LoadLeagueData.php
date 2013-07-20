<?php

namespace Mf\ManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mf\ManagerBundle\Entity\League;

class LoadLeagueData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $leagues = array(
                        'La Liga',
                        'Premier League',
                        'Calcio',
                        'Bundesliga'
                        );
        foreach($leagues as $item):
            $league = new League();
            $league->setName($item);

            $manager->persist($league);

            $this->addReference($item, $league);
        endforeach;
        
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 13; // the order in which fixtures will be loaded
    }
}

?>