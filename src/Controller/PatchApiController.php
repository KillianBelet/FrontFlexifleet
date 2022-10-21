<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class PatchApiController extends AbstractController
{
    public static $linkBase = 'http://localhost/tpFlexiFleet/public/index.php/';

    public function __construct(private HttpClientInterface $httpClient)
    {
    }

    #[Route('/patch/disable/gestion/utilisateur/{userId}', name: 'patch_disable_gestion_utilisateur', methods: ["GET", "PATCH"])]
    public function patchDisableGestionUtilisateur(string $userId)
    {
        $a = $this->httpClient->request('PATCH', self::$linkBase . 'users/' . $userId, [
            'headers' => [
                'Accept' => 'application/json',
                'Content-type' => 'application/merge-patch+json',
                'X-AUTH-TOKEN' => 'xxxxxxxxxxxxxxxxx'
            ],
            'json' => [
                'status' => 'Y'
            ]
        ]);
        return $this->redirectToRoute('gestion_utilisateur');
    }


    #[Route('/patch/enable/gestion/utilisateur/{userId}', name: 'patch_enable_gestion_utilisateur', methods: ["GET", "PATCH"])]
    public function patchEnableGestionUtilisateur(string $userId)
    {
        $a = $this->httpClient->request('PATCH', self::$linkBase . 'users/' . $userId, [
            'headers' => [
                'Accept' => 'application/json',
                'Content-type' => 'application/merge-patch+json',
                'X-AUTH-TOKEN' => 'xxxxxxxxxxxxxxxxx'
            ],
            'json' => [
                'status' => 'N'
            ]
        ]);
        return $this->redirectToRoute('gestion_utilisateur');

    }

    #[Route('/patch/disable/gestion/vehicules/{vehiculeId}', name: 'patch_disable_gestion_vehicules', methods: ["GET", "PATCH"])]
    public function patchDisableVehicule(string $vehiculeId)
    {
        $a = $this->httpClient->request('PATCH', self::$linkBase . 'vehicules/' . $vehiculeId, [
            'headers' => [
                'Accept' => 'application/json',
                'Content-type' => 'application/merge-patch+json',
                'X-AUTH-TOKEN' => 'xxxxxxxxxxxxxxxxx'
            ],
            'json' => [
                'status' => 'Y'
            ]
        ]);
        return $this->redirectToRoute('gestion_vehicules');
    }

    #[Route('/patch/enable/gestion/vehicules/{vehiculeId}', name: 'patch_enable_gestion_vehicules', methods: ["GET", "PATCH"])]
    public function patchEnableGestionVehicule(string $vehiculeId)
    {
        $a = $this->httpClient->request('PATCH', self::$linkBase . 'vehicules/' . $vehiculeId, [
            'headers' => [
                'Accept' => 'application/json',
                'Content-type' => 'application/merge-patch+json',
                'X-AUTH-TOKEN' => 'xxxxxxxxxxxxxxxxx'
            ],
            'json' => [
                'status' => 'N'
            ]
        ]);
        return $this->redirectToRoute('gestion_vehicules');

    }

    #[Route('/delete/gestion/utilisateur/{userId}', name: 'patch_delete_gestion_utilisateur', methods: ["GET", "PATCH", "DELETE"])]
    public function patchDeleteGestionUtilisateur(string $userId)
    {
        $a = $this->httpClient->request('DELETE', self::$linkBase . 'users/' . $userId, [
            'headers' => [
                'Accept' => 'application/json',
                'Content-type' => 'application/merge-patch+json',
                'X-AUTH-TOKEN' => 'xxxxxxxxxxxxxxxxx'
            ],

        ]);
        return $this->redirectToRoute('gestion_utilisateur');

    }
}
