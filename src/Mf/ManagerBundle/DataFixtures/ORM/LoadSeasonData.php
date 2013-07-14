<?php

namespace Mf\ManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mf\ManagerBundle\Entity\Season;

class LoadSeasonData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $seasons = array(
                        '2013-2014'
                        );
        foreach($seasons as $item):
            $season = new Season();
            $season->setName($item);

            $manager->persist($season);
        endforeach;
        
        $manager->flush();
    }
}

?>