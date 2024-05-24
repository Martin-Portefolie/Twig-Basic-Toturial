<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{

    #[Route('/', name: 'app_default')]
    public function index(ProductRepository $productRepository): Response
    {
        $products = $productRepository->findAllProducts();

        return $this->render('default/index.html.twig', [
            'products' => $products,
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(ProductRepository $productRepository): Response
    {
        $products = $productRepository->findAllProducts();

        return $this->render('contact.twig', [
            'products' => $products,
        ]);
    }




}
