<?php

namespace App\Controller;
use App\Entity\Pledge;
use App\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class PledgeController extends AbstractController
{
    /**
     * @Route("/project/{id}/pledge", name="pledge_create")
     */
    public function index()
    {
        return $this->redirectToRoute('pledge');
    }
}
