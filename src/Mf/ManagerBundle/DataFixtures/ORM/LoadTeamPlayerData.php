<?php

namespace Mf\ManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mf\ManagerBundle\Entity\TeamPlayer;

class LoadTeamPlayerData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $teams_players = array(
                        array(
                            'team' => 'Equipo1',
                            'player' => 'Casillas',
                            ),
                        array(
                            'team' => 'Equipo1',
                            'player' => 'Arbeloa',
                            ),
                        array(
                            'team' => 'Equipo1',
                            'player' => 'Sergio Ramos',
                            ),
                        array(
                            'team' => 'Equipo1',
                            'player' => 'Pepe',
                            ),
                        array(
                            'team' => 'Equipo1',
                            'player' => 'Varane',
                            ),
                        array(
                            'team' => 'Equipo1',
                            'player' => 'Marcelo',
                            ),
                        array(
                            'team' => 'Equipo1',
                            'player' => 'Xabi Alonso',
                            ),
                        array(
                            'team' => 'Equipo1',
                            'player' => 'Busquets',
                            ),
                        array(
                            'team' => 'Equipo1',
                            'player' => 'Xavi',
                            ),
                        array(
                            'team' => 'Equipo1',
                            'player' => 'Iniesta',
                            ),
                        array(
                            'team' => 'Equipo1',
                            'player' => 'Messi',
                            ),
                        array(
                            'team' => 'Equipo1',
                            'player' => 'Neymar',
                            ),
                        array(
                            'team' => 'Equipo1',
                            'player' => 'Courtois',
                            ),
                        array(
                            'team' => 'Equipo1',
                            'player' => 'Arda Turán',
                            ),
                        array(
                            'team' => 'Equipo1',
                            'player' => 'Villa',
                            ),
                        );
        foreach($teams_players as $item):
            $team_player = new TeamPlayer();
            $team_player->setTeam($this->getReference($item['team']));
            $team_player->setPlayer($this->getReference($item['player']));

            $manager->persist($team_player);
        endforeach;

        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 32; // the order in which fixtures will be loaded
    }
}
