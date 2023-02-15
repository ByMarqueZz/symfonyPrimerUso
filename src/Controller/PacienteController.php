<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PacienteController extends AbstractController
{
    #[Route('/paciente', name: 'app_paciente')]
    public function index(): Response
    {
        $pacientes = [
            'Pepillo' => 'Palotes',
            'Lola' => 'Flores',
        ];

        return $this->render('paciente/index.html.twig', [
            'pacientes' => $pacientes,
        ]);
    }

    #[Route('/pacienteMovil', name: 'pacienteMovil')]
    public function index2(): Response
    {
        $pacientes = [
            'Pepillo' => [
                'Palotes',
                '629009876'
            ],
            'Lola' => [
                'Flores',
                '629009876'
            ]
        ];

        return $this->render('paciente/index2.html.twig', [
            'pacientes' => $pacientes,
        ]);
    }

    #[Route('/detalle/{nombre}/{apellido}/{telefono}', name: 'detalle')]
    public function index3($nombre, $apellido, $telefono): Response
    {
        $pacientes = [
            'nombre' => $nombre,
            'apellido' => $apellido,
            'telefono' => $telefono
        ];

        return $this->render('paciente/detalle.html.twig', [
            'pacientes' => $pacientes,
        ]);
    }
   
}
