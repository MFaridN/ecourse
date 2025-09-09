<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        // nanti di sini bisa ambil data course dari database
        return view('course');
    }

}
