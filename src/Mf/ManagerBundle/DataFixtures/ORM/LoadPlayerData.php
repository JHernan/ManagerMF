<?php

namespace Mf\ManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mf\ManagerBundle\Entity\Player;

class LoadPlayerData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $teams = array(
                        array(
                            'name' => 'Casillas',
                            'football_team' => 'Real Madrid',
                            ),
                        array(
                            'name' => 'Arbeloa',
                            'football_team' => 'Real Madrid',
                            ),
                        array(
                            'name' => 'Sergio Ramos',
                            'football_team' => 'Real Madrid',
                            ),
                        array(
                            'name' => 'Pepe',
                            'football_team' => 'Real Madrid',
                            ),
                        array(
                            'name' => 'Varane',
                            'football_team' => 'Real Madrid',
                            ),
                        array(
                            'name' => 'Marcelo',
                            'football_team' => 'Real Madrid',
                            ),
                        array(
                            'name' => 'Xabi Alonso',
                            'football_team' => 'Real Madrid',
                            ),
                        array(
                            'name' => 'Khedira',
                            'football_team' => 'Real Madrid',
                            ),
                        array(
                            'name' => 'Modric',
                            'football_team' => 'Real Madrid',
                            ),
                        array(
                            'name' => 'Illarramendi',
                            'football_team' => 'Real Madrid',
                            ),
                        array(
                            'name' => 'Di María',
                            'football_team' => 'Real Madrid',
                            ),
                        array(
                            'name' => 'Özil',
                            'football_team' => 'Real Madrid',
                            ),
                        array(
                            'name' => 'Cristiano Ronaldo',
                            'football_team' => 'Real Madrid',
                            ),
                        array(
                            'name' => 'Benzema',
                            'football_team' => 'Real Madrid',
                            ),
                        array(
                            'name' => 'Valdés',
                            'football_team' => 'Barcelona',
                            ),
                        array(
                            'name' => 'Alves',
                            'football_team' => 'Barcelona',
                            ),
                        array(
                            'name' => 'Piqué',
                            'football_team' => 'Barcelona',
                            ),
                        array(
                            'name' => 'Puyol',
                            'football_team' => 'Barcelona',
                            ),
                        array(
                            'name' => 'Mascherano',
                            'football_team' => 'Barcelona',
                            ),
                        array(
                            'name' => 'Jordi Alba',
                            'football_team' => 'Barcelona',
                            ),
                        array(
                            'name' => 'Busquets',
                            'football_team' => 'Barcelona',
                            ),
                        array(
                            'name' => 'Xavi',
                            'football_team' => 'Barcelona',
                            ),
                        array(
                            'name' => 'Iniesta',
                            'football_team' => 'Barcelona',
                            ),
                        array(
                            'name' => 'Cesc',
                            'football_team' => 'Barcelona',
                            ),
                        array(
                            'name' => 'Pedro',
                            'football_team' => 'Barcelona',
                            ),
                        array(
                            'name' => 'Alexis',
                            'football_team' => 'Barcelona',
                            ),
                        array(
                            'name' => 'Tello',
                            'football_team' => 'Barcelona',
                            ),
                        array(
                            'name' => 'Messi',
                            'football_team' => 'Barcelona',
                            ),
                        array(
                            'name' => 'Neymar',
                            'football_team' => 'Barcelona',
                            ),
                        array(
                            'name' => 'Courtois',
                            'football_team' => 'Atlético de Madrid',
                            ),
                        array(
                            'name' => 'Juanfran',
                            'football_team' => 'Atlético de Madrid',
                            ),
                        array(
                            'name' => 'Demichelis',
                            'football_team' => 'Atlético de Madrid',
                            ),
                        array(
                            'name' => 'Godín',
                            'football_team' => 'Atlético de Madrid',
                            ),
                        array(
                            'name' => 'Filipe Luis',
                            'football_team' => 'Atlético de Madrid',
                            ),
                        array(
                            'name' => 'Koke',
                            'football_team' => 'Atlético de Madrid',
                            ),
                        array(
                            'name' => 'Mario',
                            'football_team' => 'Atlético de Madrid',
                            ),
                        array(
                            'name' => 'Gabi',
                            'football_team' => 'Atlético de Madrid',
                            ),
                        array(
                            'name' => 'Arda Turán',
                            'football_team' => 'Atlético de Madrid',
                            ),
                        array(
                            'name' => 'Tiago',
                            'football_team' => 'Atlético de Madrid',
                            ),
                        array(
                            'name' => 'Adrián',
                            'football_team' => 'Atlético de Madrid',
                            ),
                        array(
                            'name' => 'Diego Costa',
                            'football_team' => 'Atlético de Madrid',
                            ),
                        array(
                            'name' => 'Leo Baptistao',
                            'football_team' => 'Atlético de Madrid',
                            ),
                        array(
                            'name' => 'Villa',
                            'football_team' => 'Atlético de Madrid',
                            ),
                        array(
                            'name' => 'Juanfran',
                            'football_team' => 'Atlético de Madrid',
                            ),
                        array(
                            'name' => 'Juanfran',
                            'football_team' => 'Atlético de Madrid',
                            ),
                        array(
                            'name' => 'Juanfran',
                            'football_team' => 'Atlético de Madrid',
                            ),
                        );
        foreach($teams as $item):
            $team = new Player();
            $team->setName($item['name']);
            $team->setFootballTeam($this->getReference($item['football_team']));

            $manager->persist($team);
        endforeach;
        
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 31; // the order in which fixtures will be loaded
    }
}

?>