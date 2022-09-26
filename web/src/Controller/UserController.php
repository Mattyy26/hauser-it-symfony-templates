<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class UserController extends BaseController
{
    /**
     * @return Response
     * @Route("/xbartamartin/new", name="xbartamartin_new")
     */
    public function new(): Response
    {

        // preda data do sablony
        return $this->render("User/new.html.twig");
    }

    /**
     * @return Response
     * @Route("/xbartamartin/delete", name="homepage_delete")
     */
    public function delete(): Response
    {

        // preda data do sablony
        return $this->render("User/delete.html.twig");
    }

    /**
     * @return Response
     * @Route("/xbartamartin/edit", name="homepage_edit")
     */
    public function edit(): Response
    {

        // preda data do sablony
        return $this->render("User/edit.html.twig");
    }

    /**
     * @return Response
     * @Route("/xbartamartin/detail", name="homepage_detail")
     */
    public function detail(): Response
    {

        // preda data do sablony
        return $this->render("User/detail.html.twig");
    }

    /**
     * @return Response
     * @Route("/xbartamartin/default", name="homepage_default")
     */
    public function default(): Response
    {

        // preda data do sablony
        return $this->render("User/default.html.twig");
    }
}