<?php

namespace Mf\ManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mf\ManagerBundle\Entity\League;

class LoadLeagueData implements FixtureInterface
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
        endforeach;
        
        $manager->flush();
    }
}

?>