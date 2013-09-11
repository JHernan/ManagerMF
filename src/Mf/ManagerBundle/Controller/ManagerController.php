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
     * @Route("/team/new", name="team_new")
     * @Template()
     */
    public function newTeamAction()
    {
    	//$em = $this->getDoctrine()->getEntityManager();

        return array();
    }
}
