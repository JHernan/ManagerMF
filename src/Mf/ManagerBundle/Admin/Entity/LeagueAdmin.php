<?php
namespace Mf\ManagerBundle\Admin\Entity;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class LeagueAdmin extends Admin
{

    protected $baseRouteName = 'league_admin';

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
                ->add('name')
                ->add('seasons', 'entity', 
                    array(
                        'class' => 'Mf\ManagerBundle\Entity\Season',
                        'required' => false,
                        'property' => 'name',
                        'multiple' => true
                        )
                    )
                ->add('teams', 'entity', 
                    array(
                        'class' => 'Mf\ManagerBundle\Entity\Team',
                        'required' => false,
                        'property' => 'name',
                        'multiple' => true
                        )
                    )
                ->add('football_teams', 'entity', 
                    array(
                        'class' => 'Mf\ManagerBundle\Entity\FootballTeam',
                        'required' => false,
                        'property' => 'name',
                        'multiple' => true
                        )
                    )
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('name')
        ;
    }
}