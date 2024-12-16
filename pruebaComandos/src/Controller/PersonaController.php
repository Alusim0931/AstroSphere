<?php

namespace App\Controller;

use App\Entity\Persona;
use App\Form\PersonaType;
use App\Repository\PersonaRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/persona')]
class PersonaController extends AbstractController
{
    #[Route('/', name: 'app_persona_index', methods: ['GET'])]
    public function index(PersonaRepository $personaRepository): Response
    {
        return $this->render('persona/index.html.twig', [
            'personas' => $personaRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_persona_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $persona = new Persona();
        $form = $this->createForm(PersonaType::class, $persona);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($persona);
            $entityManager->flush();

            return $this->redirectToRoute('app_persona_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('persona/new.html.twig', [
            'persona' => $persona,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_persona_show', methods: ['GET'])]
    public function show(?Persona $persona): Response
    {
        if (!$persona) {
            throw $this->createNotFoundException('La persona no fue encontrada.');
        }

        return $this->render('persona/show.html.twig', [
            'persona' => $persona,
        ]);
    }


    #[Route('/{id}', name: 'app_persona_delete', methods: ['POST'])]
    public function delete(Request $request, Persona $persona, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$persona->getId(), $request->request->get('_token'))) {
            $entityManager->remove($persona);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_persona_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/search', name: 'app_persona_search', methods: ['GET'])]
    public function search(Request $request, PersonaRepository $personaRepository): Response
    {
        $searchTerm = $request->query->get('query', '');

        $personas = $personaRepository->findBySearchTerm($searchTerm);

        return $this->render('persona/search.html.twig', [
            'personas' => $personas,
            'searchTerm' => $searchTerm,
        ]);
    }




}
