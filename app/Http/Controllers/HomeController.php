<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;

 
class HomeController extends Controller
{
 
    public function homePage()
    {
        // affichage avec le parametre tableau au vue du retour
        
            $post = "Bienvenus sur la page d'accueil";
            
        return view('home', compact('post'));
    }

    //affichage avec la fonction compact('param')
    public function contactPage(){
        $title = "Bienvenus sur la page de contacts!";
        return view('contact', compact('title'));
    }

    //affichage avec la fonction with('param', $param)
    public function aboutPage()
    {
        $title = "Bienvenus sur la page d'à propos!";
        return view('about')->with('title',$title);
    } 
    
    //affichage avec usage des id
    public function useId($id)
    {
        $shows = [
            1 => "premier affichage",
            2 => "deuxieme affichage"
        ];  
        
        $how = $shows[$id];
        return view('display')->with('show',$shows[$id]);
    } 
}