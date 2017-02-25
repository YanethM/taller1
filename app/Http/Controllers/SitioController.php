<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function index() {
        return view('Sitio/index');
    }

    public function verCurriculum(Request $request, $nombre) {
        if ($nombre == 'Yaneth') {
            return view('Sitio/Curriculums/HVYaneth');
        } else if ($nombre == 'Andres') {
            return view('Sitio/Curriculums/HVAndres');
        }
    }

}
