<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function sponsorzy(){
        $title = "Sponsorzy";
        return view('pages.sponsorzy')->with('title',$title);
    }

    public function ekipa(){
        $title = "Ekipa";
        return view('pages.ekipa')->with('title',$title);
    }

    public function wiadomosci(){
        $title = "Wiadomosci";
        return view('pages.wiadomosci')->with('title',$title);
    }

    public function transmisje(){
        $title = "Transmisje";
        return view('pages.transmisje')->with('title',$title);
    }

    public function turnieje(){
        $title = "Turnieje";
        return view('pages.turnieje')->with('title',$title);
    }
}
