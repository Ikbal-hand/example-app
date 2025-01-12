<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->role == "administrator") {
            return view("dashboard.admin",
);
        }

        return redirect()->intended()->with('status', 'Your account has been banned from the system. Please register again or use another account.');
    }
}

