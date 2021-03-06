<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Items;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $getTime = now()->toArray();
        $hour = $getTime['hour'];
        $minute = $getTime['minute'];
        $hour = strval($hour);
        $minute = strval($minute);
        
        if($minute < 10) {
            $minute = '0' . $minute;
        }

        if($hour < 10) {
            $hour = '0' . $hour;
        }

        $time = $hour . ':' . $minute;

        if($time >= '03:00' && $time < '11:00') {
            $waktu = 'pagi';
        } else if($time >= '11:00' && $time < '15:00') {
            $waktu = 'siang';
        } else if($time >= '15:00' && $time < '18:00' ) {
            $waktu = 'sore';
        } else if($time >= '18:00') {
            $waktu = 'malam';
        }

        return view('dashboard.dashboard', [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'time' => $waktu,
            'users' => number_format(count(User::all())),
            'items' => number_format(count(Items::all())),
            'categories' => number_format(count(Category::all()))
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
}
