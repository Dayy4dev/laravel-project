<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\View\View;

class ClassroomController extends Controller
{
    public function index(): View
    {
        $classroom = Classroom::all();

        return view('admin.classroom', ['title' => 'Classroom', 'classroom' => $classroom]);
    }
}
