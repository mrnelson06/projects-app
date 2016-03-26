<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function overview()
    {
        $name = 'Morgan R. Nelson';
        return view('pages.overview')->with([
            'first' => 'Morgan',
            'last' => 'Nelson',
        ]);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function about()
    {
        $people = [
//            'Pietro Boselli', 'Marc Fitt', 'Matt Bartholomew'
        ];
        return view('pages.about', compact('people'));
    }
}
