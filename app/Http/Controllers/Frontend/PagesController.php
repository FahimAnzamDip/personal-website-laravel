<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home() {
        $title = "Fahim Anzam";
        $categories = Category::all();
        $services = Service::all();
        $projects = Project::all();
        $profile = Profile::where('id', 1)->first();
        $skills = Skill::all();

        return view('frontend.home',
            [
                'title'      => $title,
                'categories' => $categories,
                'services'   => $services,
                'projects'   => $projects,
                'profile'    => $profile,
                'skills'     => $skills
            ]);
    }

    public function portfolio() {
        $title = "Fahim Anzam - Portfolio";
        $categories = Category::all();
        $projects = Project::paginate(9);
        $profile = Profile::where('id', 1)->first();

        return view('frontend.portfolio',
            [
                'title'      => $title,
                'categories' => $categories,
                'projects'   => $projects,
                'profile'    => $profile
            ]);
    }
}
