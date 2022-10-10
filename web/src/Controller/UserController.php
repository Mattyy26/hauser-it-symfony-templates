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

class UserController extends BaseController
{
    /**
     * @return Response
     * @Route("homepage_new", name="homepage_new")
     */
    public function new(): Response
    {

        // preda data do sablony
        return $this->render("User/new.html.twig");
    }

    /**
     * @return Response
     * @Route("homepage_delete", name="homepage_delete")
     */
    public function delete(): Response
    {

        // preda data do sablony
        return $this->render("User/delete.html.twig");
    }

    /**
     * @return Response
     * @Route("homepage_edit", name="homepage_edit")
     */
    public function edit(): Response
    {

        // preda data do sablony
        return $this->render("User/edit.html.twig");
    }

    /**
     * @return Response
     * @Route("homepage_detail", name="homepage_detail")
     */
    public function detail(): Response
    {

        // preda data do sablony
        return $this->render("User/detail.html.twig");
    }

    /**
     * @return Response
     * @Route("homepage_default", name="homepage_default")
     */
    public function default(): Response
    {

        // preda data do sablony
        return $this->render("User/default.html.twig");
    }
}