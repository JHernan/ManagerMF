<?php
namespace Mf\ManagerBundle\Admin\Entity;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class DemarcationAdmin extends Admin
{

    protected $baseRouteName = 'demarcation_admin';

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
                ->add('tactics', null,
                        array('required' => false, 'expanded' => true))
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