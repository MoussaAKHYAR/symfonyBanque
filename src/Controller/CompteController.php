<?php

namespace App\Controller;

use App\Entity\Compte;
use App\Form\CompteType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CompteController extends AbstractController
{
    /**
     * @Route("/addCompte", name="compte")
     */
    public function add(Request $request)
    {
        $compte = new Compte;
        $form = $this->createForm(CompteType::class, $compte);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $compte = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($compte);
            $entityManager->flush();
            return $this->redirectToRoute('liste_compte');
        }
        return $this->render('compte/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/listeCompte", name="liste_compte")
     */
    public function liste()
    {
        $em = $this->getDoctrine()->getManager();
        $data['comptes'] = $em->getRepository(Compte::class)->findAll();
        return $this->render('compte/liste.html.twig', $data);
    }
}
