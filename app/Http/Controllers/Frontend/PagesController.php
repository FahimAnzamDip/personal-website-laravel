<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $title = "Fahim Anzam";
        $categories = Category::all();
        $services = Service::all();

        return view('frontend.home',
            [
                'title' => $title,
                'categories' => $categories,
                'services' => $services
            ]);
    }

    public function portfolio() {
        $title = "Fahim Anzam - Portfolio";
        $categories = Category::all();

        return view('frontend.portfolio',
            [
                'title' => $title,
                'categories' => $categories
            ]);
    }
}
