<?php

namespace Mf\ManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\View\View;

class ApiController extends Controller
{
    public function getTeamsAction()
    {
        $manager = $this->container->get('doctrine')->getEntityManager();
        $teams = $manager->getRepository('Mf\ManagerBundle\Entity\Team')->findAll();


        $view = View::create()->setData($teams);

        return $this->getViewHandler()->handle($view);
    } // "get_teams"     [GET] /teams

    public function getPlayersAction()
    {
        $manager = $this->container->get('doctrine')->getEntityManager();
        $teams = $manager->getRepository('Mf\ManagerBundle\Entity\Player')->getPlayersActive();

        $view = View::create()->setData($teams);

        return $this->getViewHandler()->handle($view);
    } // "get_players"     [GET] /players

    public function getLeagueSeassonPlayerAction($league_seasson)
    {
        $manager = $this->container->get('doctrine')->getEntityManager();
        $teams = $manager->getRepository('Mf\ManagerBundle\Entity\LeagueSeason')->getPlayersActive();

        $view = View::create()->setData($teams);

        return $this->getViewHandler()->handle($view);
    } // "get_players"     [GET] /league_seassons/{league_seasson}/players

    /**
     * @return \FOS\RestBundle\View\ViewHandler
     */
    private function getViewHandler()
    {
        return $this->container->get('fos_rest.view_handler');
    }
}
