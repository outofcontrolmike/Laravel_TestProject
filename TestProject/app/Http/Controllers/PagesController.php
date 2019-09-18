<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public static function index()
    {
        $projects = Project::all();

        return $projects;
    }

}
