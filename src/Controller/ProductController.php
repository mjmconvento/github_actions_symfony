<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product/test', name: 'app_product')]
    public function index(EntityManagerInterface $entityManager): JsonResponse
    {
        $productRepository = $entityManager->getRepository(Product::class);

        /** @var Product $product */
        $product = $productRepository->findOneBy([
            "name" => "Product 1",
            "description" => "Product 1",
        ]);

        return $this->json([
            'id' => $product->getId(),
            'name' => $product->getName(),
            'description' => $product->getDescription()
        ]);
    }
}
