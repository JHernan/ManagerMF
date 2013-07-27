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
                            'demarcations' => array(
                                    'Portero'
                                ),
                            ),
                        array(
                            'name' => 'Arbeloa',
                            'football_team' => 'Real Madrid',
                            'demarcations' => array(
                                    'Lateral Derecho'
                                ),
                            ),
                        array(
                            'name' => 'Sergio Ramos',
                            'football_team' => 'Real Madrid',
                            'demarcations' => array(
                                    'Lateral Derecho',
                                    'Central'
                                ),
                            ),
                        array(
                            'name' => 'Pepe',
                            'football_team' => 'Real Madrid',
                            'demarcations' => array(
                                    'Central'
                                ),
                            ),
                        array(
                            'name' => 'Varane',
                            'football_team' => 'Real Madrid',
                            'demarcations' => array(
                                    'Central'
                                ),
                            ),
                        array(
                            'name' => 'Marcelo',
                            'football_team' => 'Real Madrid',
                            'demarcations' => array(
                                    'Lateral Izquierdo'
                                ),
                            ),
                        array(
                            'name' => 'Xabi Alonso',
                            'football_team' => 'Real Madrid',
                            'demarcations' => array(
                                    'Pivote',
                                    'Medio Centro'
                                ),
                            ),
                        array(
                            'name' => 'Khedira',
                            'football_team' => 'Real Madrid',
                            'demarcations' => array(
                                    'Pivote',
                                    'Interior'
                                ),
                            ),
                        array(
                            'name' => 'Modric',
                            'football_team' => 'Real Madrid',
                            'demarcations' => array(
                                    'Medio Centro',
                                    'Media Punta'
                                ),
                            ),
                        array(
                            'name' => 'Illarramendi',
                            'football_team' => 'Real Madrid',
                            'demarcations' => array(
                                    'Medio Centro'
                                ),
                            ),
                        array(
                            'name' => 'Di María',
                            'football_team' => 'Real Madrid',
                            'demarcations' => array(
                                    'Extremo'
                                ),
                            ),
                        array(
                            'name' => 'Özil',
                            'football_team' => 'Real Madrid',
                            'demarcations' => array(
                                    'Media Punta'
                                ),
                            ),
                        array(
                            'name' => 'Cristiano Ronaldo',
                            'football_team' => 'Real Madrid',
                            'demarcations' => array(
                                    'Extremo',
                                    'Delantero'
                                ),
                            ),
                        array(
                            'name' => 'Benzema',
                            'football_team' => 'Real Madrid',
                            'demarcations' => array(
                                    'Delantero'
                                ),
                            ),
                        array(
                            'name' => 'Valdés',
                            'football_team' => 'Barcelona',
                            'demarcations' => array(
                                    'Portero'
                                ),
                            ),
                        array(
                            'name' => 'Alves',
                            'football_team' => 'Barcelona',
                            'demarcations' => array(
                                    'Lateral Derecho'
                                ),
                            ),
                        array(
                            'name' => 'Piqué',
                            'football_team' => 'Barcelona',
                            'demarcations' => array(
                                    'Central'
                                ),
                            ),
                        array(
                            'name' => 'Puyol',
                            'football_team' => 'Barcelona',
                            'demarcations' => array(
                                    'Lateral Derecho',
                                    'Central'
                                ),
                            ),
                        array(
                            'name' => 'Mascherano',
                            'football_team' => 'Barcelona',
                            'demarcations' => array(
                                    'Central',
                                    'Pivote'
                                ),
                            ),
                        array(
                            'name' => 'Jordi Alba',
                            'football_team' => 'Barcelona',
                            'demarcations' => array(
                                    'Lateral Izquierdo'
                                ),
                            ),
                        array(
                            'name' => 'Busquets',
                            'football_team' => 'Barcelona',
                            'demarcations' => array(
                                    'Pivote'
                                ),
                            ),
                        array(
                            'name' => 'Xavi',
                            'football_team' => 'Barcelona',
                            'demarcations' => array(
                                    'Medio Centro',
                                    'Interior'
                                ),
                            ),
                        array(
                            'name' => 'Iniesta',
                            'football_team' => 'Barcelona',
                            'demarcations' => array(
                                    'Media Punta',
                                    'Interior'
                                ),
                            ),
                        array(
                            'name' => 'Cesc',
                            'football_team' => 'Barcelona',
                            'demarcations' => array(
                                    'Medio Centro',
                                    'Media Punta',
                                    'Interior'
                                ),
                            ),
                        array(
                            'name' => 'Pedro',
                            'football_team' => 'Barcelona',
                            'demarcations' => array(
                                    'Extremo'
                                ),
                            ),
                        array(
                            'name' => 'Alexis',
                            'football_team' => 'Barcelona',
                            'demarcations' => array(
                                    'Extremo',
                                    'Delantero'
                                ),
                            ),
                        array(
                            'name' => 'Tello',
                            'football_team' => 'Barcelona',
                            'demarcations' => array(
                                    'Extremo'
                                ),
                            ),
                        array(
                            'name' => 'Messi',
                            'football_team' => 'Barcelona',
                            'demarcations' => array(
                                    'Extremo',
                                    'Delantero'
                                ),
                            ),
                        array(
                            'name' => 'Neymar',
                            'football_team' => 'Barcelona',
                            'demarcations' => array(
                                    'Extremo'
                                ),
                            ),
                        array(
                            'name' => 'Courtois',
                            'football_team' => 'Atlético de Madrid',
                            'demarcations' => array(
                                    'Portero'
                                ),
                            ),
                        array(
                            'name' => 'Juanfran',
                            'football_team' => 'Atlético de Madrid',
                            'demarcations' => array(
                                    'Lateral Derecho'
                                ),
                            ),
                        array(
                            'name' => 'Demichelis',
                            'football_team' => 'Atlético de Madrid',
                            'demarcations' => array(
                                    'Central'
                                ),
                            ),
                        array(
                            'name' => 'Godín',
                            'football_team' => 'Atlético de Madrid',
                            'demarcations' => array(
                                    'Central'
                                ),
                            ),
                        array(
                            'name' => 'Filipe Luis',
                            'football_team' => 'Atlético de Madrid',
                            'demarcations' => array(
                                    'Lateral Izquierdo'
                                ),
                            ),
                        array(
                            'name' => 'Koke',
                            'football_team' => 'Atlético de Madrid',
                            'demarcations' => array(
                                    'Medio Centro',
                                    'Interior'
                                ),
                            ),
                        array(
                            'name' => 'Mario',
                            'football_team' => 'Atlético de Madrid',
                            'demarcations' => array(
                                    'Pivote'
                                ),
                            ),
                        array(
                            'name' => 'Gabi',
                            'football_team' => 'Atlético de Madrid',
                            'demarcations' => array(
                                    'Medio Centro',
                                    'Interior'
                                ),
                            ),
                        array(
                            'name' => 'Arda Turán',
                            'football_team' => 'Atlético de Madrid',
                            'demarcations' => array(
                                    'Extremo'
                                ),
                            ),
                        array(
                            'name' => 'Tiago',
                            'football_team' => 'Atlético de Madrid',
                            'demarcations' => array(
                                    'Interior'
                                ),
                            ),
                        array(
                            'name' => 'Adrián',
                            'football_team' => 'Atlético de Madrid',
                            'demarcations' => array(
                                    'Extremo',
                                    'Delantero'
                                ),
                            ),
                        array(
                            'name' => 'Diego Costa',
                            'football_team' => 'Atlético de Madrid',
                            'demarcations' => array(
                                    'Extremo',
                                    'Delantero'
                                ),
                            ),
                        array(
                            'name' => 'Leo Baptistao',
                            'football_team' => 'Atlético de Madrid',
                            'demarcations' => array(
                                    'Delantero'
                                ),
                            ),
                        array(
                            'name' => 'Villa',
                            'football_team' => 'Atlético de Madrid',
                            'demarcations' => array(
                                    'Extremo',
                                    'Delantero'
                                ),
                            ),
                        );
        foreach($teams as $item):
            $player = new Player();
            $player->setName($item['name']);
            $player->setActive(true);
            $player->setFootballTeam($this->getReference($item['football_team']));

            if(array_key_exists('demarcations', $item)){
                foreach($item['demarcations'] as $demarcation):
                    $player->addDemarcation($this->getReference($demarcation));
                endforeach;
            }         
            $manager->persist($player);               

            $this->addReference($item['name'], $player);
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