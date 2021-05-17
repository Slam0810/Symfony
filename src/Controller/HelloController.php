<?php

namespace App\Controller;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\ArticleType;
use App\Entity\Article;



class HelloController extends AbstractController
{
    /**
     * @var Route("/home", name="home")
     */

    public function home(Request $request): Response
    {
        $name = 'Aïsha bint Ibrahim';

        return $this->render('home.html.twig', array('name' => $name));
    }


}
