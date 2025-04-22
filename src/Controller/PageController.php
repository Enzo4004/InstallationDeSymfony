<?php

// Défini le chemin de ce fichier
// Obligatoire, doit représenter exactement le chemin du fichier en remplaçant le dossier "src" par "App"
namespace App\Controller;

// Remplace le require
// On indique ici le namespace de la classe qu'on veut utiliser et Symfony + composer font le require automatiquement

use Symfony\Component\BrowserKit\Response;
use Symfony\Component\Routing\Annotation\Route;

// Création d'une classe "PageController"
class PageController {
    
    #[Route("/", name: "home")]
	public function home() {
		// j'utilise la classe Response de Symfony
		// pour renvoyer une réponse HTTP, incluant HTML et un status HTTP 200
		return new Response ("<p> coucou ca va bien ? </p>", 200);
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