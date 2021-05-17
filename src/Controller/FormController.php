<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ArticleType;
use App\Entity\Article;


class FormController extends AbstractController
{
    /**
     * @var Route("/form/new", name="new")
     */
    public function new(Request $request)
    {
        $article = new Article();
        $article->setTitle('Fonction d\'essai');
        $article->setContent('Un très court article.');
        $article->setAuthor('Slam');
        $article->setDatePublication(new \DateTime());
        $article->setImage('image');

        $form = $this->createFormBuilder($article)
            ->add('title')
            ->add('content', TextareaType::class)
            ->add('author', TextType::class)
            ->add('DatePublication', DateType::class)
            ->add('image', FileType::class, array("mapped" => false))
            ->getForm();

        return $this->render('new.html.twig', array(
            'form' =>$form->createView(),
        ));
    }
}
