<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuitarController extends Controller
{

    private static function getData(){
        return[
           ['id'=>1,'name'=>'Ayesha','brand'=>'xyz'],
           ['id'=>2,'name'=>'Rubisha','brand'=>'abc'],
           ['id'=>3,'name'=>'Minsa','brand'=>'mnb'],
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //displaying all the guitar in the db
        //GET
        return view('guitars.index',[
            'guitars'=>self::getData(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //For showing the UI for creating the resuorce(Guitar)
        //GET
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //POST
        //Creating that resource(Guitar) in the db
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //GET
        //for showing an individual resource
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //GET
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //POST
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
