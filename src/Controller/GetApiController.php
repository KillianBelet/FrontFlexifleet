<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class GetApiController extends AbstractController
{
    public static $linkBase = 'http://localhost/tpFlexiFleet/public/index.php/';

    public function __construct(private HttpClientInterface $httpClient)
    {
    }



    #[Route('/gestion/utilisateur', name: 'gestion_utilisateur')]
    public function gestionUtilisateur()
    {
        $response = $this->httpClient->request('GET', self::$linkBase . 'users/', [
            'headers' => [
                'Accept' => 'application/json',
                'X-AUTH-TOKEN' => 'xxxxxxxxxxxxxxxxx'
            ],
        ]);
        $content = $response->toArray();
       // var_dump($content);
        return $this->render('gestion_utilisateur.html.twig', [
            'users' => $content,
        ]);
    }


    #[Route('/gestion/agences', name: 'gestion_agences')]
    public function gestionAgences()
    {
        $response = $this->httpClient->request('GET', self::$linkBase . 'agencies/', [
            'headers' => [
                'Accept' => 'application/json',
                'X-AUTH-TOKEN' => 'xxxxxxxxxxxxxxxxx'
            ],
        ]);
        $content = $response->toArray();
        return $this->render('gestion_agencies.html.twig', [
            'agencies' => $content,
        ]);
    }


    #[Route('/gestion/vehicules', name: 'gestion_vehicules')]
    public function gestionVehicules()
    {
        $response = $this->httpClient->request('GET', self::$linkBase . 'vehicles/', [
            'headers' => [
                'Accept' => 'application/json',
                'X-AUTH-TOKEN' => 'xxxxxxxxxxxxxxxxx'
            ],
        ]);
        $content = $response->toArray();
        return $this->render('gestion_vehicles.html.twig', [
            'vehicles' => $content,
        ]);
    }
}
