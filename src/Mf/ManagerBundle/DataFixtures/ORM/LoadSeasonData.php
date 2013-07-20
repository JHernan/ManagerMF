<?php

namespace Mf\ManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mf\ManagerBundle\Entity\Season;

class LoadSeasonData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $seasons = array(
                        array(
                            'name' => '2013-2014',
                            'league' => 'La Liga'
                            ),
                        array(
                            'name' => '2013-2014',
                            'league' => 'Premier League'
                            ),
                        array(
                            'name' => '2013-2014',
                            'league' => 'Calcio'
                            ),
                        array(
                            'name' => '2013-2014',
                            'league' => 'Bundesliga'
                            ),
                        );
        foreach($seasons as $item):
            $season = new Season();
            $season->setName($item['name']);
            $season->setLeague($this->getReference('La Liga'));

            $manager->persist($season);

            $this->addReference($item['league'] . ' ' . $item['name'], $season);
        endforeach;
        
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 40; // the order in which fixtures will be loaded
    }
}

?>