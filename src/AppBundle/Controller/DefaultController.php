<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/video", name="video")
     */
    public function videoAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/video.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/foto", name="foto")
     */
    public function fotoAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/foto.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/uch_in_city", name="uch_in_city")
     */
    public function uch_in_cityAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/uch_in_city.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/uch_in_cityl", name="uch_in_cityl")
     */
    public function uch_in_citylAction(Request $request)
    {
        $cityusr = $request->query->get('city');
        return $this->render('default/uch_in_cityl.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'city' => $cityusr
        ]);
    }

    /**
     * @Route("/uch_map", name="uch_map")
     */
    public function uch_mapAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/uch_map.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/project", name="project")
     */
    public function projectAction(Request $request)
    {
        $projects = $this->getDoctrine()->getRepository('AppBundle:DB_Projects')->findAll();
        //dump($projects);

        return $this->render('default/project.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'projects' => $projects
        ]);
    }
    /**
     * @Route("/project/{prj}", name="project_view")
     */
    public function project_viewAction($prj)
    {
        $project = $this->getDoctrine()->getRepository('AppBundle:DB_Projects')->find($prj);
        //dump($project);

        return $this->render('default/project_view.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'project' => $project
        ]);
    }
}
