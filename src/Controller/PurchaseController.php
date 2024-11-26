<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class PurchaseController extends AbstractController
{
    #[Route('/purchase', name:'purchase', methods:'POST')]
    public function __invoke(): JsonResponse
    {
        return $this->json(["purchase"]);
    }
}
