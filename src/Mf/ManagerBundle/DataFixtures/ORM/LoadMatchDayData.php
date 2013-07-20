<?php

namespace Mf\ManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mf\ManagerBundle\Entity\MatchDay;

class LoadMatchDayData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $match_days = array(
                        array(
                            'name' => 'Jornada 1',
                            'start_date' => '2013-08-17 17:00:00',
                            'end_date' => '2013-08-19 23:59:00',
                            'season' => 'La Liga'
                            ),
                        array(
                            'name' => 'Jornada 2',
                            'start_date' => '2013-08-24 17:00:00',
                            'end_date' => '2013-08-26 23:59:00',
                            'season' => 'La Liga'
                            ),
                        array(
                            'name' => 'Jornada 3',
                            'start_date' => '2013-08-31 17:00:00',
                            'end_date' => '2013-09-02 23:59:00',
                            'season' => 'La Liga'
                            ),
                        array(
                            'name' => 'Jornada 4',
                            'start_date' => '2013-09-14 17:00:00',
                            'end_date' => '2013-09-16 23:59:00',
                            'season' => 'La Liga'
                            ),
                        array(
                            'name' => 'Jornada 5',
                            'start_date' => '2013-09-21 17:00:00',
                            'end_date' => '2013-09-23 23:59:00',
                            'season' => 'La Liga'
                            ),
                        );
        foreach($match_days as $item):
            $match_day = new MatchDay();        
            $match_day->setName($item['name']);            
            $match_day->setStartDate(new \DateTime($item['start_date']));
            $match_day->setEndDate(new \DateTime($item['end_date']));
            $match_day->setSeason($this->getReference('La Liga 2013-2014'));

            $manager->persist($match_day);
        endforeach;
        
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 30; // the order in which fixtures will be loaded
    }
}

?>