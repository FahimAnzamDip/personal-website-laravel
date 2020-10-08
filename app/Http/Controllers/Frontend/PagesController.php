<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $title = "Fahim Anzam";
        $categories = Category::all();
        $services = Service::all();
        $projects = Project::all();

        return view('frontend.home',
            [
                'title' => $title,
                'categories' => $categories,
                'services' => $services,
                'projects' => $projects
            ]);
    }

    public function portfolio() {
        $title = "Fahim Anzam - Portfolio";
        $categories = Category::all();
        $projects = Project::paginate(9);

        return view('frontend.portfolio',
            [
                'title' => $title,
                'categories' => $categories,
                'projects' => $projects
            ]);
    }
}
