<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view("admin.dashboard", [
            'title' => "Dashboard"
        ]);
    }

    public function userdata() {
        return view("admin.userdata", [
            'title' => "User Data"
        ]);
    }

    public function fooddata() {
        return view("admin.fooddata", [
            'title' => "Food Data"
        ]);
    }

    public function feedback() {
        return view("admin.feedback", [
            'title' => "Feedback"
        ]);
    }
}
