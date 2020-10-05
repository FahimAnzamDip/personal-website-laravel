<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $title = "Dashboard";

        return view('admin.dashboard', ['title' => $title]);
    }

    public function logout() {
        Auth::logout();
        toast('You are now logged out!', 'success');

        return redirect('/login');
    }
}
