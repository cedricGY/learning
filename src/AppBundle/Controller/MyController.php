<?php
/**
 * Created by PhpStorm.
 * User: Carla Marques
 * Date: 05/01/2017
 * Time: 17:39
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MyController extends Controller
{
    /**
     * @Route("/myRoute/{subpart}")
     */
    public function myAction($subpart)
    {
        $sentences = [
            "I'm the first sentence",
            "and I'm the last one"
        ];

        return $this->render('myviews/show.html.twig', array(
            'name' =>  $subpart,
            'sentences' => $sentences
        ));
    }
}