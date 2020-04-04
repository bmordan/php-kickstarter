<?php

namespace App\Controller;
use App\Entity\Project;
use App\Entity\Pledge;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ProjectController extends AbstractController
{
    /**
     * @Route("/project", name="project")
     */
    public function index()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $projectsAll = $entityManager->getRepository(Project::class)->findAll();
        $projects = array_map(function ($project) {
            $project->getPledges();
            return $project;
        }, $projectsAll);
        return $this->render('project/index.html.twig', [
            'projects' => $projects
        ]);
    }
    /**
     * @Route("/project/new", name="project_new")
     */
    public function new()
    {
        return $this->render('project/new.html.twig');
    }
    /**
     * @Route("/project", name="project_create", methods={"POST"})
     */
    public function create(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $project = new Project();
        $project->setTitle($request->request->get('title'));
        $project->setTarget($request->request->get('target'));
        $entityManager->persist($project);
        $entityManager->flush();
        return $this->redirectToRoute('project');
    }
}
