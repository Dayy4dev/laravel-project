<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(): View
    {
        $students = Student::all();
        return view("admin.students", ["title" => "Students","students" => $students]);
    }
}
