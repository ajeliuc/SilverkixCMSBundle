<?php

namespace Silverkix\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelperController extends Controller
{
    /**
     * Render the navigation menu
     */
    public function navigationAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pages = $em->getRepository('SilverkixCMSBundle:Page')->findBy(array("parent"=>null), array("orderid"=>"asc"));

        return $this->render('SilverkixCMSBundle:Site:Snippets/navigation.html.twig', array(
            'pages'      => $pages,
        ));
    }
}
