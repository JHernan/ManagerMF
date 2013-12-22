<?php
namespace Mf\ManagerBundle\Admin\Entity;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class PlayerAdmin extends Admin
{

    protected $baseRouteName = 'player_admin';

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('active', null, array('editable' => true))
            ->add('football_team')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
            ->add('name')
            ->add('active')
            ->add('football_team')
            ->add('demarcations', null,
                array('required' => false, 'expanded' => true))
            ->add('team_players', null,
                array('required' => false, 'expanded' => true))
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('name')
            ->add('active')
            ->add('football_team')
            ->add('demarcations')
        ;
    }
}
