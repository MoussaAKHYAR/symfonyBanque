<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\ClientType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

class ClientPhysiqueController extends AbstractController
{
    /**
     * @Route("/addClient", name="client_physique")
     */
    public function add(Request $request)
    {
        $client = new Client;

        $form = $this->createForm(ClientType::class, $client);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $client = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($client);
            $entityManager->flush();
            return $this->redirectToRoute('liste_client');
        }
        return $this->render('client_physique/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/listeClient", name="liste_client")
     */
    public function liste()
    {
        $em = $this->getDoctrine()->getManager();
        // $client = new Client();
        // $form = $this->createForm(ClientType::class, $client);
        // $data['form'] = $form->createView();
        $data['clients'] = $em->getRepository(Client::class)->findAll();
        return $this->render('client_physique/liste.html.twig', $data);
    }

}
