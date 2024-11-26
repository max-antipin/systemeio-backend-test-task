<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class CalculatePriceController extends AbstractController
{
    #[Route('/calculate-price', name:'calculate-price', methods:'GET')]
    public function __invoke(): JsonResponse
    {
        return $this->json(["calculate-price"]);
    }
}
