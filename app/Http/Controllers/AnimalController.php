<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        return view('welcome', compact('animals'));
    }

    public function store(Request $request)
    {
        $newEntry = new Animal;
        $newEntry->race = $request->race;
        $newEntry->age = $request->age;
        $newEntry->src = $request->src;
        $newEntry->save();
        return redirect()->back();
    }

    public function create()
    {
        $animals = Animal::all();
        return view('pages.create', compact('animals'));
    }

    public function destroy($id)
    {
        $destroy = Animal::find($id);
        $destroy->delete();
        return redirect('/');
    }

    public function show($id)
    {
        $show = Animal::find($id);
        return view('pages.show', compact('show'));
    }

    public function edit($id)
    {
        $show = Animal::find($id);
        return view('pages.edit', compact('show'));
    }

    public function update($id, Request $request)
    {
        $update = Animal::find($id);
        $update->race = $request->race;
        $update->age = $request->age;
        $update->src  = $request->src;
        $update->save();
        return redirect()->back();
    }
}