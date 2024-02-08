<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $user = auth()->user();
    
        $apartments = Apartment::where('user_id', $user->id)->get();

        return view('admin.dashboard', compact('user', 'apartments'));
    }
}