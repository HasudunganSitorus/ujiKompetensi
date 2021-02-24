<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Resources\ItemResource;
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
        // $parent = Item::with('child')->get();
        // dd($parent);
        $items = Item::where('parent_id', 0)->with('child.child')->get();
        return view('home', compact('items'));
        // return ItemResource::collection($items);
        // dd($items);

        // return view('home', compact('datas'));
        // return view('home');
    }
    
    public function show($id)
    {
        
    }
}
