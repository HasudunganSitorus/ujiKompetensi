<?php

namespace App\Http\Controllers\Api;

use App\Models\Parents;
use App\Http\Resources\ParentResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $response = Http::get('http://test.com');
        $data = $response->json();
        dd($data);
        // $parents = Parents::orderBy('name', 'asc')->get();
        // return response([
        //     'success' => true,
        //     'message' =>'List Semua data parent',
        //     'data'  => $parents
        // ],200);

        // $parents = Parents::orderBy('name', 'asc')->get();
        // return ParentResource::collection($parents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Parents $parent): ParentResource
    {
        $parents = Parents::findOrFail($parent);
        return new ParentResource($parents);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parents $parent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parents $parent)
    {
        //
    }
}
