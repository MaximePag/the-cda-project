<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('parts/header', ['title' => 'Liste des annonces']);
        echo view('contact');
        echo view('parts/footer');
    }
}

/* templates pour les parties, pages, errors pour divisé dans la views pour séparer
routes permettent de lancer une action en foncion de ce que l'on va taper
controller vue route
bootstrap cdn */
