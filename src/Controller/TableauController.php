<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TableauController extends AbstractController
{
    /**
     * @var Route("/tableau", name="tableau")
     */

    public function tableau(Request $request): Response
    {
        $famille = array(
            array("id" => 1, "nom" => "Ibrahim", "Role" => "Père", "DateNaissance" =>"26-03-1990"),
            array("id" => 2, "nom" => "Leila", "Role" => "Mère", "DateNaissance" =>"15-05-1998"),
            array("id" => 3, "nom" => "Aïsha", "Role" => "Fille ainée", "DateNaissance" =>"23-11-2019"),
            array("id" => 4, "nom" => "Khadija", "Role" => "Fille", "DateNaissance" =>"A venir"),
        );
        return $this->render('tableau.html.twig', array('familles' => $famille));
    }
}
