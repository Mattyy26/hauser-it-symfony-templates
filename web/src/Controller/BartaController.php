<?php

namespace App\Controller;

use App\Entity\Address;
use App\Entity\Cities;
use App\Entity\Users;
use App\Form\AddressFormType;
use App\Repository\AddressRepository;
use App\Repository\CitiesRepository;
use App\Repository\UsersRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Asset\UrlPackage;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use layout\spacelab;

class BartaController extends BaseController
{
    /**
     * @return Response
     * @Route("/", name="homepage_default")
     */
    public function default(): Response
    {

        // preda data do sablony
        return $this->render("Homepage/default.html.twig", array("layoutName" => $this->getParameter("layout").".html.twig"));
    }

    /**
     * @return Response
     * @Route("/add", name="homepage_add")
     */
    public function add(): Response
    {

        // preda data do sablony
        return $this->render("Homepage/add.html.twig");
    }

    /**
     * @return Response
     * @Route("/edit", name="homepage_edit")
     */
    public function edit(): Response
    {

        // preda data do sablony
        return $this->render("Homepage/edit.html.twig");
    }

    /**
     * @return Response
     * @Route("/detail", name="homepage_detail")
     */
    public function detail(): Response
    {

        // preda data do sablony
        return $this->render("Homepage/detail.html.twig");
    }

    /**
     * @return Response
     * @Route("/spacelab", name="homepage_detail")
     */
    public function spacelab(): Response
    {

        // preda data do sablony
        return $this->render("Homepage/spacelab.html.twig");
        return $this->setLayout("index.html");

    }


}