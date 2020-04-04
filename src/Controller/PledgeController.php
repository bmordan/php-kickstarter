<?php

namespace App\Controller;
use App\Entity\Pledge;
use App\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/project/{project_id}", name="project_pledge_create")
 */

class PledgeController extends AbstractController
{
    /**
     * @Route("/pledge", name="pledge_create", methods={"POST"})
     */
    public function create(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $project = $entityManager->getRepository(Project::class)->find($request->attributes->get('project_id'));
        $pledge = new Pledge();
        $pledge->setAmount($request->request->get('amount'));
        $pledge->setProject($project);
        $entityManager->persist($pledge);
        $entityManager->flush();
        return $this->redirectToRoute('project');
    }
}