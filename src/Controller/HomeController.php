<?php

namespace App\Controller;

use App\Metier\Api;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(HttpClientInterface $client): Response
    {
        $coupons = new Api($client);
        $coupons = $coupons->listeCoupons('http://localhost:8083/coupons');

        return $this->render('home/index.html.twig', [
            "coupons" => $coupons,
        ]);
    }

    /**
     * @Route("/liste_promotions", name="liste_promotions")
     */
    public function listePromotions(HttpClientInterface $client): Response
    {
        $promotions = new Api($client);
        $promotions = $promotions->listeCoupons('http://localhost:8083/coupons');

        return $this->render('home/listePromotions.html.twig', [
            "promotions" => $promotions,
        ]);
    }
}
