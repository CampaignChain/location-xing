<?php

namespace CampaignChain\Location\XingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CampaignChainLocationXingBundle:Default:index.html.twig', array('name' => $name));
    }
}
