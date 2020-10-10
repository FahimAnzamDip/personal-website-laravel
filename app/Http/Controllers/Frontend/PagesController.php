<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Experience;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Stat;
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
        $stats = Stat::latest()->take(4)->get();
        $experiences = Experience::latest()->get();

        return view('frontend.home',
            [
                'title'       => $title,
                'categories'  => $categories,
                'services'    => $services,
                'projects'    => $projects,
                'profile'     => $profile,
                'skills'      => $skills,
                'stats'       => $stats,
                'experiences' => $experiences
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
