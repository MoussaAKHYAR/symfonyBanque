<?php

namespace App\Controller;

use App\Entity\Entreprise;
use App\Form\EntrepriseType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EntrepriseController extends AbstractController
{
    /**
     * @Route("/addEntreprise", name="entreprise")
     */
    public function add(Request $request)
    {
        $entreprise = new Entreprise;

        $form = $this->createForm(EntrepriseType::class, $entreprise);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $entreprise = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($entreprise);
            $entityManager->flush();
            return $this->redirectToRoute('liste_entreprise');
        }
        return $this->render('entreprise/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/listeEntreprise", name="liste_entreprise")
     */
    public function liste()
    {
        $em = $this->getDoctrine()->getManager();
        $data['entreprises'] = $em->getRepository(Entreprise::class)->findAll();
        return $this->render('entreprise/liste.html.twig', $data);
    }

}
