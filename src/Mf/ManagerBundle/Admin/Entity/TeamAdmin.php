<?php
namespace Mf\ManagerBundle\Admin\Entity;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class TeamAdmin extends Admin
{

    protected $baseRouteName = 'team_admin';

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('user')
            ->add('league_seasons')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
                ->add('name')
                ->add('user')
                ->add('league_seasons')
                ->add('team_players', null,
                        array('required' => false, 'expanded' => true))
                ->add('team_points', null,
                        array('required' => false, 'expanded' => true))
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter            
            ->add('name')
            ->add('user')
            ->add('league_seasons')
        ;
    }
}