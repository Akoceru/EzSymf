<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction(Request $r)
    {
        var_dump($r->server);die;
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/hello/{name}", name="hello_world")
     */
    public function helloAction($name)
    {
        return $this->render('AppBundle::hello-world.html.twig', [
            'name'=> $name

        ]);
    }

    /** * @Route("/{year}-{month}-{day}-{name}/{page}",
        * requirements={ * "year"="\d{4}",
        * "month"="\d{2}", * "day"="\d{2}",
        * "page"="\d+"
        * },
        * defaults={ * "page"="1"
        * },
        * name="article"
        * )
     */
    public function articledAction($year,$month,$day,$name,$page)
    {
        return new Response('Article page ' .$year);
    }

    /**
     * @Route("/twig", name="twig")
     */
    public function twigAction()
    {
        return $this->render("AppBundle::twig.html.twig", [
            "content" => "<h1>loool</h1>",
        ]);
    }
}
