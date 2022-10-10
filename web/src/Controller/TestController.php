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

class TestController extends BaseController
{
    /**
     * @return Response
     * @Route("test_new", name="test_new")
     */
    public function new(): Response
    {

        // preda data do sablony
        return $this->render("Test/new.html.twig");
    }

    /**
     * @return Response
     * @Route("test_delete", name="test_delete")
     */
    public function delete(): Response
    {

        // preda data do sablony
        return $this->render("Test/delete.html.twig");
    }

    /**
     * @return Response
     * @Route("test_edit", name="test_edit")
     */
    public function edit(): Response
    {

        // preda data do sablony
        return $this->render("Test/edit.html.twig");
    }

    /**
     * @return Response
     * @Route("test_detail", name="test_detail")
     */
    public function detail(): Response
    {

        // preda data do sablony
        return $this->render("Test/detail.html.twig");
    }

    /**
     * @return Response
     * @Route("test_default", name="test_default")
     */
    public function default(): Response
    {

        // preda data do sablony
        return $this->render("Test/default.html.twig");
    }
}