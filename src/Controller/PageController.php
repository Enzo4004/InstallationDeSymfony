<?php

// définir le chemin de ce fichier
// obligatoire, doit représenter exactement le chemin du fichier
// en remplaçant le dosser "src" par "App"
namespace App\Controller;

// remplace le require
// on indique ici le namespace de la classe qu'on veut utiliser
// et symfony + composer feront le require automatiquement

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// J'utilise extends AbstractController
// pour pouvoir utiliser des fonctionnalités que symfony
// me donnent pour gérer plus facilement les controleurs
// parmi ces fonctionnalités : celle d'utiliser Twig facilement
class PageController extends AbstractController {


	#[Route("/", name: "home")]
	public function home() {
		// j'utilise la méthode render
		// qui permet de récupérer un fichier de views twig
		// de le transformer en HTML
		// et de la renvoyer en response HTTP avec un status 200
		return $this->render('home.html.twig');
	}



}


























      /* Création d'une fonction "home"
      public function home(){
        var_dump('Page accueil'); die;
    

    #[Route('/contact', name:'contact')]

    // Création d'une fonction "contact"
    public function contact(){
        var_dump('Page contact'); die;
    }

    #[Route('/a-propos', name:'about')]

    // Création d'une fonction "about"
    public function about(){
        var_dump('Page a-propos'); die;
    }
}
    */