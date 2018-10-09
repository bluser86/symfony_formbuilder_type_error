<?php
declare(strict_types=1);

namespace App\Controller;


use App\Form\ExampleForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ExampleController extends Controller
{
    public function example(): Response
    {
        $form = $this->createForm(ExampleForm::class);

        return $this->render('example.html.twig', ['form' => $form->createView()]);
    }
}
