<?php

namespace App\Controller;

use App\Form\BugReportFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BugReportController extends AbstractController
{
    /**
     * @Route("/", name="bug_report")
     */
    public function index(): Response
    {
        $form = $this->createForm(BugReportFormType::class);
        return $this->render('show.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
