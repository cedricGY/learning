<?php
/**
 * Created by PhpStorm.
 * User: Carla Marques
 * Date: 05/01/2017
 * Time: 17:39
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class MyController
{
    /**
     * @Route("/myRoute/{subpart}")
     */
    public function myAction($subpart)
    {
        return new Response("Response returned by MyController." . " YOU ARE ON THIS PAGE : " . $subpart);
    }
}