<?php

namespace App\Controller;

use App\Entities\Circle;
use App\Entities\Triangle;
use App\Services\ShapeCalculator;
use JsonException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class ShapeCalculatorController extends AbstractController
{
    /**
     * @param ShapeCalculator $shapeCalculator
     * @param SerializerInterface $serializer
     */
    public function __construct(
        private ShapeCalculator $shapeCalculator,
        private SerializerInterface $serializer
    ) {
    }

    /**
     * @return Response
     * @throws JsonException
     */
    #[Route(path: '/', name: 'index', methods: ['GET'])]
    public function index(): Response
    {
        return new Response(json_encode("Shape calculation service", JSON_THROW_ON_ERROR));
    }

    /**
     * @param float $radius
     * @return Response
     */
    #[Route(path: '/circle/{radius}', name: 'radius', methods: ['GET'])]
    public function circle(float $radius): Response
    {
        $circle = new Circle($radius);

        return new Response($this->serializer->serialize($this->shapeCalculator->calculate($circle), 'json'));
    }

    /**
     * @param float $a
     * @param float $b
     * @param float $c
     * @return Response
     */
    #[Route(path: '/triangle/{a}/{b}/{c}', name: 'triangle', methods: ['GET'])]
    public function triangle(float $a, float $b, float $c): Response
    {
        $triangle = new Triangle($a, $b, $c);

        return new Response($this->serializer->serialize($this->shapeCalculator->calculate($triangle), 'json'));
    }
}