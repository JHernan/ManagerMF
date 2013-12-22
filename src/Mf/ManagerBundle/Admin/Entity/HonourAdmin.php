<?php
namespace Mf\ManagerBundle\Admin\Entity;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class HonourAdmin extends Admin
{

    protected $baseRouteName = 'honour_admin';

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('leagues_seasons')
            ->add('user')
            ->add('position')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
            ->add('user')
            ->add('leagues_seasons')
            ->add('position')
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('user')
            ->add('leagues_seasons')
            ->add('position')
        ;
    }
}
