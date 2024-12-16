<?php

namespace App\Controller;

use App\Entity\Empleado;
use App\Form\EmpleadoType;
use App\Repository\EmpleadoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/')]
class EmpleadoController extends AbstractController
{
    #[Route('/', name: 'app_empleado_index', methods: ['GET'])]
    public function index(EmpleadoRepository $empleadoRepository): Response
    {
        return $this->render('empleado/index.html.twig', [
            'empleados' => $empleadoRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_empleado_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $empleado = new Empleado();
        $form = $this->createForm(EmpleadoType::class, $empleado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($empleado);
            $entityManager->flush();

            return $this->redirectToRoute('app_empleado_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('empleado/new.html.twig', [
            'empleado' => $empleado,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_empleado_show', methods: ['GET'])]
    public function show(Empleado $empleado): Response
    {
        return $this->render('empleado/show.html.twig', [
            'empleado' => $empleado,
        ]);
    }


    #[Route('/{id}', name: 'app_empleado_delete', methods: ['POST'])]
    public function delete(Request $request, Empleado $empleado, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$empleado->getId(), $request->request->get('_token'))) {
            $entityManager->remove($empleado);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_empleado_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/search', name: 'app_empleado_search', methods: ['GET'])]
    public function search(Request $request, EmpleadoRepository $empleadoRepository): Response
    {
        $searchTerm = $request->query->get('search', '');
        
        $empleados = $empleadoRepository->findBySearchTerm($searchTerm);

        return $this->render('empleado/search.html.twig', [
            'empleados' => $empleados,
            'searchTerm' => $searchTerm,
        ]);
    }

}
