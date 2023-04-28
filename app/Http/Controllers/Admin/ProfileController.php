<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $userCount  = User::all()->count();
        $categories = Category::orderBy('name', 'DESC')
                        ->take(8)
                        ->get();        
        
        return view('admin.dashboard')->with([
            'users' => $userCount,
            'categories' => $categories
        ]);
    }
}
