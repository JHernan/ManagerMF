<?php

namespace Mf\ManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mf\ManagerBundle\Entity\FootballTeam;

class LoadFootballTeamData implements FixtureInterface
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

            $manager->persist($football_team);
        endforeach;
        
        $manager->flush();
    }
}

?>