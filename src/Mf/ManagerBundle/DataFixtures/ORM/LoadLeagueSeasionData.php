<?php

namespace Mf\ManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mf\ManagerBundle\Entity\LeagueSeason;

class LoadLeagueSeasonData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $leagues_seasons = array(
                            array(
                                'league' => 'La Liga',
                                'season' => '2013/2014'
                                ),
                            array(
                                'league' => 'La Liga',
                                'season' => '2014/2015'
                                ),
                            array(
                                'league' => 'Premier League',
                                'season' => '2013/2014'
                                ),
                            array(
                                'league' => 'Premier League',
                                'season' => '2014/2015'
                                ),
                            array(
                                'league' => 'Calcio',
                                'season' => '2013/2014'
                                ),
                            array(
                                'league' => 'Calcio',
                                'season' => '2014/2015'
                                ),
                            array(
                                'league' => 'Bundesliga',
                                'season' => '2013/2014'
                                ),
                            array(
                                'league' => 'Bundesliga',
                                'season' => '2014/2015'
                                ),
                            );

        foreach($leagues_seasons as $item):
            $league_season = new LeagueSeason();
            $league_season->setLeague($this->getReference($item['league']));
            $league_season->setSeason($this->getReference($item['season']));

            $manager->persist($league_season);

            $this->addReference($item['league'] . ' - ' . $item['season'], $league_season);
        endforeach;
        
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 25; // the order in which fixtures will be loaded
    }
}

?>