<?php
/**
 * Created by PhpStorm.
 * User: Danilo
 * Date: 19/12/2017
 * Time: 15:00
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TaskController extends Controller
{

    /**
     * @Route("/tasks/{name}")
     */
    public function indexAction($name){

        $tpl = $this->container->get('templating');
        $html = $tpl->render('task/index.html.twig', [
            'name'=> $name
        ]);

        return new Response($html);
    }
}