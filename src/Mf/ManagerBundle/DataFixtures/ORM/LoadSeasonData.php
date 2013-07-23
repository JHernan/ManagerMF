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
                            'name' => '2013/2014',
                            ),
                        array(
                            'name' => '2014/2015',
                            ),
                        array(
                            'name' => '2015/2016',
                            ),
                        );
        foreach($seasons as $item):
            $season = new Season();
            $season->setName($item['name']);

            $manager->persist($season);

            $this->addReference($item['name'], $season);
        endforeach;
        
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 22; // the order in which fixtures will be loaded
    }
}

?>