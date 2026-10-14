<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class AboutController extends Controller
{
    public function index(): View
    {
        return view('admin.about', [
            'title' => 'About Me!',
            'name' => 'Muhammad Dafi Ristiansyah',
            'hobby' => 'Playing video games',
            'github' => 'Dayy4dev'
        ]);
    }
}
