<?php

namespace App\Http\Controllers;

use App\Animal;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $animals = Animal::all();
 
        return view('animals.index',compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $animal = new Animal();
 
        $animal->animal_name = request('animal_name');
        $animal->animal_type = request('animal_type');
        $animal->animal_skin = request('animal_skin');
        $animal->animal_description = request('animal_description');
 
        $animal->save();
 
        return redirect('/animals');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $animal = Animal::findOrFail($id);
        return view('animals.show',compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animals = Animal::findOrFail($id);
         return view('animals.edit',compact('animals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $animal = Animal::findOrFail($id);
 
        $animal->animal_name = request('animal_name');
        $animal->animal_type = request('animal_type');
        $animal->animal_skin = request('animal_skin');
        $animal->animal_description = request('animal_description');
 
        $animal->save();
 
        return redirect('/animals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Animal::findOrFail($id)->delete();
       return redirect('/animals')->with('success', 'Book is successfully deleted');
    }
}
