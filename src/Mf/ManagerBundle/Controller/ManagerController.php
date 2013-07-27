<?php

namespace Mf\ManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ManagerController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/make-team", name="make_team")
     * @Template()
     */
    public function makeTeamAction()
    {
    	$em = $this->getDoctrine()->getEntityManager();

        return array();
    }
}
