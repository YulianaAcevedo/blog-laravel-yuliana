<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $slides = [
            [
                'title' => 'Slide 1',
                'content' => 'Contenido del slide 1',
                'image' => (asset('images/jpg/tulipan1.jpg')),
            ],
            [
                'title' => 'Slide 2',
                'content' => 'Contenido del slide 2',
                'image' => (asset('images/jpg/tulipan2.jpg')),

            ],
            [
                'title' => 'Slide 3',
                'content' => 'Contenido del slide 3',
                'image' => (asset('images/jpg/tulipan3.jpg')),

            ],
            // Agrega más elementos de slide según sea necesario
        ];

        return view('welcome', compact('slides'));
    }
}