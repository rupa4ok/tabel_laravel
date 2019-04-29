<?php


namespace App\Http\Controllers;



use Illuminate\Foundation\Auth\AuthenticatesUsers;

class IndexController extends Controller
{
    
    public function index()
    {
        return view('index');
    }
}