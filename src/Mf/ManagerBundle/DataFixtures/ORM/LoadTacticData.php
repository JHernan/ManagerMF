<?php

namespace Mf\ManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Mf\ManagerBundle\Entity\Tactic;

class LoadTacticData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $tactics = array(
                        '5-4-1',
                        '5-3-2',
                        '5-2-3',
                        '4-5-1',  
                        '4-4-2',
                        '4-3-3',
                        '3-5-2',
                        '3-4-3'
                        );
        foreach($tactics as $item):
            $tactic = new Tactic();
            $tactic->setName($item);

            $manager->persist($tactic);

            $this->addReference($item, $tactic);
        endforeach;
        
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 11; // the order in which fixtures will be loaded
    }
}

?>