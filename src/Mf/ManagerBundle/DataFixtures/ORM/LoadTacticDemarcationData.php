<?php

namespace Mf\ManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mf\ManagerBundle\Entity\TacticDemarcation;

class LoadTacticDemarcationData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $tactics_demartacions = array(
                        array(
                            'tactic' => '5-4-1',
                            'demarcation' => 'Portero'
                            ),
                        array(
                            'tactic' => '5-4-1',
                            'demarcation' => 'Lateral Derecho'
                            ),
                        array(
                            'tactic' => '5-4-1',
                            'demarcation' => 'Central'
                            ),
                        array(
                            'tactic' => '5-4-1',
                            'demarcation' => 'Central'
                            ),
                        array(
                            'tactic' => '5-4-1',
                            'demarcation' => 'Central'
                            ),
                        array(
                            'tactic' => '5-4-1',
                            'demarcation' => 'Lateral Izquierdo'
                            ),
                        array(
                            'tactic' => '5-4-1',
                            'demarcation' => 'Pivote'
                            ),
                        array(
                            'tactic' => '5-4-1',
                            'demarcation' => 'Medio Centro'
                            ),
                        array(
                            'tactic' => '5-4-1',
                            'demarcation' => 'Extremo'
                            ),
                        array(
                            'tactic' => '5-4-1',
                            'demarcation' => 'Extremo'
                            ),
                        array(
                            'tactic' => '5-4-1',
                            'demarcation' => 'Delantero'
                            ),


                        array(
                            'tactic' => '5-3-2',
                            'demarcation' => 'Portero'
                            ),
                        array(
                            'tactic' => '5-3-2',
                            'demarcation' => 'Lateral Derecho'
                            ),
                        array(
                            'tactic' => '5-3-2',
                            'demarcation' => 'Central'
                            ),
                        array(
                            'tactic' => '5-3-2',
                            'demarcation' => 'Central'
                            ),
                        array(
                            'tactic' => '5-3-2',
                            'demarcation' => 'Central'
                            ),
                        array(
                            'tactic' => '5-3-2',
                            'demarcation' => 'Lateral Izquierdo'
                            ),
                        array(
                            'tactic' => '5-3-2',
                            'demarcation' => 'Pivote'
                            ),
                        array(
                            'tactic' => '5-3-2',
                            'demarcation' => 'Interior'
                            ),
                        array(
                            'tactic' => '5-3-2',
                            'demarcation' => 'Interior'
                            ),
                        array(
                            'tactic' => '5-3-2',
                            'demarcation' => 'Delantero'
                            ),
                        array(
                            'tactic' => '5-3-2',
                            'demarcation' => 'Delantero'
                            ),


                        array(
                            'tactic' => '5-2-3',
                            'demarcation' => 'Portero'
                            ),
                        array(
                            'tactic' => '5-2-3',
                            'demarcation' => 'Lateral Derecho'
                            ),
                        array(
                            'tactic' => '5-2-3',
                            'demarcation' => 'Central'
                            ),
                        array(
                            'tactic' => '5-2-3',
                            'demarcation' => 'Central'
                            ),
                        array(
                            'tactic' => '5-2-3',
                            'demarcation' => 'Central'
                            ),
                        array(
                            'tactic' => '5-2-3',
                            'demarcation' => 'Lateral Izquierdo'
                            ),
                        array(
                            'tactic' => '5-2-3',
                            'demarcation' => 'Pivote'
                            ),
                        array(
                            'tactic' => '5-2-3',
                            'demarcation' => 'Medio Centro'
                            ),
                        array(
                            'tactic' => '5-2-3',
                            'demarcation' => 'Extremo'
                            ),
                        array(
                            'tactic' => '5-2-3',
                            'demarcation' => 'Extremo'
                            ),
                        array(
                            'tactic' => '5-2-3',
                            'demarcation' => 'Delantero'
                            ),


                        array(
                            'tactic' => '4-5-1',
                            'demarcation' => 'Portero'
                            ),
                        array(
                            'tactic' => '4-5-1',
                            'demarcation' => 'Lateral Derecho'
                            ),
                        array(
                            'tactic' => '4-5-1',
                            'demarcation' => 'Central'
                            ),
                        array(
                            'tactic' => '4-5-1',
                            'demarcation' => 'Central'
                            ),
                        array(
                            'tactic' => '4-5-1',
                            'demarcation' => 'Lateral Izquierdo'
                            ),
                        array(
                            'tactic' => '4-5-1',
                            'demarcation' => 'Pivote'
                            ),
                        array(
                            'tactic' => '4-5-1',
                            'demarcation' => 'Medio Centro'
                            ),
                        array(
                            'tactic' => '4-5-1',
                            'demarcation' => 'Media Punta'
                            ),
                        array(
                            'tactic' => '4-5-1',
                            'demarcation' => 'Extremo'
                            ),
                        array(
                            'tactic' => '4-5-1',
                            'demarcation' => 'Extremo'
                            ),
                        array(
                            'tactic' => '4-5-1',
                            'demarcation' => 'Delantero'
                            ),


                        array(
                            'tactic' => '4-4-2',
                            'demarcation' => 'Portero'
                            ),
                        array(
                            'tactic' => '4-4-2',
                            'demarcation' => 'Lateral Derecho'
                            ),
                        array(
                            'tactic' => '4-4-2',
                            'demarcation' => 'Central'
                            ),
                        array(
                            'tactic' => '4-4-2',
                            'demarcation' => 'Central'
                            ),
                        array(
                            'tactic' => '4-4-2',
                            'demarcation' => 'Lateral Izquierdo'
                            ),
                        array(
                            'tactic' => '4-4-2',
                            'demarcation' => 'Pivote'
                            ),
                        array(
                            'tactic' => '4-4-2',
                            'demarcation' => 'Medio Centro'
                            ),
                        array(
                            'tactic' => '4-4-2',
                            'demarcation' => 'Extremo'
                            ),
                        array(
                            'tactic' => '4-4-2',
                            'demarcation' => 'Extremo'
                            ),
                        array(
                            'tactic' => '4-4-2',
                            'demarcation' => 'Delantero'
                            ),
                        array(
                            'tactic' => '4-4-2',
                            'demarcation' => 'Delantero'
                            ),


                        array(
                            'tactic' => '4-3-3',
                            'demarcation' => 'Portero'
                            ),
                        array(
                            'tactic' => '4-3-3',
                            'demarcation' => 'Lateral Derecho'
                            ),
                        array(
                            'tactic' => '4-3-3',
                            'demarcation' => 'Central'
                            ),
                        array(
                            'tactic' => '4-3-3',
                            'demarcation' => 'Central'
                            ),
                        array(
                            'tactic' => '4-3-3',
                            'demarcation' => 'Lateral Izquierdo'
                            ),
                        array(
                            'tactic' => '4-3-3',
                            'demarcation' => 'Pivote'
                            ),
                        array(
                            'tactic' => '4-3-3',
                            'demarcation' => 'Interior'
                            ),
                        array(
                            'tactic' => '4-3-3',
                            'demarcation' => 'Interior'
                            ),
                        array(
                            'tactic' => '4-3-3',
                            'demarcation' => 'Extremo'
                            ),
                        array(
                            'tactic' => '4-3-3',
                            'demarcation' => 'Extremo'
                            ),
                        array(
                            'tactic' => '4-3-3',
                            'demarcation' => 'Delantero'
                            ),


                        array(
                            'tactic' => '3-5-2',
                            'demarcation' => 'Portero'
                            ),
                        array(
                            'tactic' => '3-5-2',
                            'demarcation' => 'Lateral Derecho'
                            ),
                        array(
                            'tactic' => '3-5-2',
                            'demarcation' => 'Central'
                            ),
                        array(
                            'tactic' => '3-5-2',
                            'demarcation' => 'Lateral Izquierdo'
                            ),
                        array(
                            'tactic' => '3-5-2',
                            'demarcation' => 'Pivote'
                            ),
                        array(
                            'tactic' => '3-5-2',
                            'demarcation' => 'Medio Centro'
                            ),
                        array(
                            'tactic' => '3-5-2',
                            'demarcation' => 'Extremo'
                            ),
                        array(
                            'tactic' => '3-5-2',
                            'demarcation' => 'Extremo'
                            ),
                        array(
                            'tactic' => '3-5-2',
                            'demarcation' => 'Media Punta'
                            ),
                        array(
                            'tactic' => '3-5-2',
                            'demarcation' => 'Delantero'
                            ),
                        array(
                            'tactic' => '3-5-2',
                            'demarcation' => 'Delantero'
                            ),


                        array(
                            'tactic' => '3-4-3',
                            'demarcation' => 'Portero'
                            ),
                        array(
                            'tactic' => '3-4-3',
                            'demarcation' => 'Lateral Derecho'
                            ),
                        array(
                            'tactic' => '3-4-3',
                            'demarcation' => 'Central'
                            ),
                        array(
                            'tactic' => '3-4-3',
                            'demarcation' => 'Lateral Izquierdo'
                            ),
                        array(
                            'tactic' => '3-4-3',
                            'demarcation' => 'Pivote'
                            ),
                        array(
                            'tactic' => '3-4-3',
                            'demarcation' => 'Medio Centro'
                            ),
                        array(
                            'tactic' => '3-4-3',
                            'demarcation' => 'Interior'
                            ),
                        array(
                            'tactic' => '3-4-3',
                            'demarcation' => 'Interior'
                            ),
                        array(
                            'tactic' => '3-4-3',
                            'demarcation' => 'Extremo'
                            ),
                        array(
                            'tactic' => '3-4-3',
                            'demarcation' => 'Extremo'
                            ),
                        array(
                            'tactic' => '3-4-3',
                            'demarcation' => 'Delantero'
                            ),
                        );
        foreach($tactics_demartacions as $item):
            $tactic_demarcation = new TacticDemarcation();
            $tactic_demarcation->setTactic($this->getReference($item['tactic']));
            $tactic_demarcation->setDemarcation($this->getReference($item['demarcation']));

            $manager->persist($tactic_demarcation);
        endforeach;
        
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 12; // the order in which fixtures will be loaded
    }
}

?>