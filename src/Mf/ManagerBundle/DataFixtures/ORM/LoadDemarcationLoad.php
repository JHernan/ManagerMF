<?php

namespace Mf\ManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mf\ManagerBundle\Entity\Demarcation;

class LoadDemarcationata implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $demarcations = array(
                        'Portero',
                        'Lateral Derecho',
                        'Lateral Izquierdo',
                        'Central',  
                        'Pivote',
                        'Medio Centro',
                        'Interior',
                        'Extremo',
                        'Media Punta',
                        'Delantero'
                        );
        foreach($demarcations as $item):
            $demarcation = new Demarcation();
            $demarcation->setName($item);

            $manager->persist($demarcation);
        endforeach;
        
        $manager->flush();
    }
}

?>