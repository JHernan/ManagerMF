<?php

namespace Mf\ManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mf\ManagerBundle\Entity\FootballTeam;

class LoadFootballTeamData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $football_teams = array(
                        'Almería',
                        'Atlético de Madrid',
                        'Athletic Bilbao',
                        'Barcelona',  
                        'Betis',
                        'Celta',
                        'Elche',
                        'Espanyol',
                        'Getafe',
                        'Granada',
                        'Levante',
                        'Málaga',
                        'Osasuna',
                        'Rayo Vallecano',
                        'Real Madrid',   
                        'Real Sociedad',
                        'Sevilla',               
                        'Valencia',
                        'Valladolid',
                        'Villarreal'
                        );
        foreach($football_teams as $item):
            $football_team = new FootballTeam();
            $football_team->setName($item);
            $football_team->addLeaguesSeason($this->getReference('La Liga - 2013/2014'));

            $manager->persist($football_team);

            $this->addReference($item, $football_team);
        endforeach;
        
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 26; // the order in which fixtures will be loaded
    }
}

?>