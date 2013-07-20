<?php

namespace Mf\ManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mf\ManagerBundle\Entity\Demarcation;

class LoadDemarcationData extends AbstractFixture implements OrderedFixtureInterface
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

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 10; // the order in which fixtures will be loaded
    }
}

?>