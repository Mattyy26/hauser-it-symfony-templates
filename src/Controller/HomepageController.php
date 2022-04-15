<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomepageController extends BaseController
{

    /**
     * @param ManagerRegistry $doctrine
     * @return Response
     */
    #[Route('/')]
    public function default(ManagerRegistry $doctrine): Response {

        // ziska parametry z service.yaml
        $mailtofrom = $this->getParameter('mailtofrom');

        // preda data do sablony
        return $this->render("Homepage/default.html.twig", array('id'=>5));
    }


    #[Route('/detail')]
    public function detail(): Response {

   return $this->render("Homepage/detail.html.twig", array('id'=>5));
    }

}