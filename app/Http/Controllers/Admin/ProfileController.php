<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index() {
        $title = "Dashboard - Profile";

        return view('admin.pages.profile.index', [
            'title' => $title
        ]);
    }


    public function update(Request $request) {

    }
}
