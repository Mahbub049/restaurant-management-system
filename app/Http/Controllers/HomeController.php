<?php

namespace App\Http\Controllers;
use App\Models\User; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Food; 
use App\Models\Foodchef;

class HomeController extends Controller
{
    public function index()
    {
        return view("home");
    }
    public function about()
    {
        return view("about");
    }
    public function menu()
    {
        $data=food::all();
        return view("menu",compact("data"));
    }
    public function chefs()
    {
        $data2=foodchef::all();
        return view("chefs",compact("data2"));
    }
    public function contact()
    {
        return view("contact");
    }

    public function redirects()
    {
        $data = food::all();
        $usertype=Auth::user()->usertype;
        if($usertype=='1'){
            return view('admin.adminhome');
        }
        else{
            return view('home',compact('data'));
        }
    }
}
