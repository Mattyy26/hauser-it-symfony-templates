<?php

namespace App\Controller;

use App\Entity\Users;
use App\Repository\AddressRepository;
use App\Repository\UsersRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomepageController extends BaseController
{

    /**
     * @param ManagerRegistry $doctrine
     * @return Response
     * @Route("/", name="homepage_default")
     */
    public function default(ManagerRegistry $doctrine): Response
    {

        // ziska parametry z service.yaml
        $mailtofrom = $this->getParameter('mailtofrom');

        // preda data do sablony
        return $this->render("Homepage/default.html.twig", array('id' => 5));
    }


    /**
     * @param ManagerRegistry $doctrine
     * @param UsersRepository $user
     * @return Response
     * @Route("/detail", name="homepage_detail")
     */
    public function detail(ManagerRegistry $doctrine, UsersRepository $user): Response
    {

        /** vlozime novy radek do tabulky */
        //$link = $this->generateUrl('homepage_detail');


        /** vlozime novy radek do tabulky */
        //$entityManager = $doctrine->getManager();
        //$data1 = new Users();
        //$data1->setName("tatar");
        //$entityManager->persist($data1);
        //$entityManager->flush();

        /** vytahneme radek podle id */
        //$entityManager = $doctrine->getManager();
        //$address = $entityManager->getRepository(Address::class);
        //$data2 = $address->find(2);

        /** pres relaci mohu setnout neco i v jine tabulce */
//        $entityManager = $doctrine->getManager();
//        $address = $entityManager->getRepository(Address::class)->find(2);
//        $address->getCities()->setName("Praha 111");
//        $address->setStreet('jjjjjjjjjjjjj');
//        $entityManager->persist($address);
//        $entityManager->flush();

        /** query UsersRepository */
        //$data3 = $user->findAll();

        /**n mazani jednoho zaznamu */
//        $entityManager = $doctrine->getManager();
//        $user = $entityManager->getRepository(Users::class)->find(3);
//        $entityManager->remove($user);
//        $entityManager->flush();

        /** klasicku dotaz v modelu */
        //$address1 = new AddressRepository($doctrine);
        //$data4 = $address1->getAllData();

        /** mazani vice zaznamu podle where */
//        $entityManager = $doctrine->getManager();
//        $sql    = 'DELETE FROM users
//           WHERE name = "tatar"';
//        $stmt = $entityManager->getConnection()->prepare($sql);
//        $stmt->execute();

        /** vypise vsechny data z tabulky */
        //$entityManager = $doctrine->getManager();
//        $users = $entityManager->getRepository(Users::class);
//        $data3 = $users->findAll();

        /** podminka na Novak, trideni a limit */
//        $data4 = $users->findBy(array("name" => "Novak"), array("name" => "DESC"), 1, 0);

        /** bez podminky, trideni a limit */
//        $data5 = $users->findBy(array(), array("name" => "ASC"), 100, 0);


        $data = array('houska', 'rohlik', 'chleba');

        return $this->render("Homepage/detail.html.twig", array('id' => 5, 'data' => $data));
    }

    /**
     * @Route("/form-test", name="homepage_form_test")
     */
    public function formTest(ManagerRegistry $doctrine): Response
    {



        return $this->render("Homepage/form-test.html.twig");
    }

}