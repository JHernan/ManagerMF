<?php

namespace Mf\ManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mf\ManagerBundle\Entity\Honour;

class LoadHonourData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $honours = array(
                    array(
                        'league_season' => 'La Liga - 2013/2014',
                        'user' => 'Rai',
                        'position' => '1'
                        ),
                    array(
                        'league_season' => 'La Liga - 2013/2014',
                        'user' => 'ACastilla',
                        'position' => '2'
                        ),
                    array(
                        'league_season' => 'La Liga - 2013/2014',
                        'user' => 'Arvin',
                        'position' => '3'
                        ),
                    );
        foreach($honours as $item):
            $honour = new Honour();
            $honour->setLeaguesSeasons($this->getReference($item['league_season']));
            $honour->setUser($this->getReference($item['user']));
            $honour->setPosition($item['position']);

            $manager->persist($honour);
        endforeach;

        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 28; // the order in which fixtures will be loaded
    }
}
