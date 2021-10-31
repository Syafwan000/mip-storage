<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard', [
            'title' => 'Dashboard',
            'active' => 'dashboard'
        ]);
    }

    public function show_profile()
    {
        return view('dashboard.profile', [
            'title' => 'Profile',
            'active' => 'profile'
        ]);
    }

    public function show_settings()
    {
        return view('dashboard.settings', [
            'title' => 'Setting',
            'active' => 'settings'
        ]);
    }

    public function show_items()
    {
        return view('dashboard.items', [
            'title' => 'Items',
            'active' => 'items'
        ]);
    }
}
