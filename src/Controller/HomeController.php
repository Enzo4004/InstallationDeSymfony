<?php 
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

//je crée la class HomeController 

class HomeController{

    //je crée la fonction (methode) nomé home  qui affiche un var_dump 
    //je crée une route qui definit le  chemin (url) à "\"
     //donc quand l'utilisateur demande l'url"\" ma fonction s'execute  

     #[Route('/', name:"home")]
     public function home() {
         var_dump('Page accueil de mon site internet'); die;
     }
 
}