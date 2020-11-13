<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $response = Http::get('https://rst.net.id/api/test-web-developer.json');
        $datas = $response->json();
        // dd($datas);
        return view('home', compact('datas'));
        // return view('home');
    }
    public function show($id)
    {
        
    }
}
