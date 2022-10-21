<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Owner;

use Illuminate\Http\Request;

class ClinicController extends Controller
{
    public function displayAnimals()
    {
        $animals = Animal::orderBy('name', 'asc')->get();

        return view('animals', compact('animals'));
    }

    public function displayOwners()
    {
        $owners = Owner::get();

        return view('owners', compact('owners'));
    }

    public function search(Request $request)
    {
        $owners = [];
        $animals = [];
        if ($request->has('searchOwner')) {
            $search_term_owner = $request->input('searchOwner');
            $owners = Owner::where('first_name', 'like', '%' . $search_term_owner . '%')->orderBy('surname', 'asc')->get();
        } else {
            $search_term_animal = $request->input('searchAnimal');
            $animals = Animal::where('name', 'like', '%' . $search_term_animal . '%')->orderBy('name', 'asc')->get();
            // return view('results', compact('animals'));
        }
        return view('results', compact('owners', 'animals'));
    }

    public function animalDetail($id)
    {
        $animals = Animal::where('id', $id)->get();
        // dd($animal);
        // $owners = $animals->owner;
        return view('view-of-animal', compact('animals'));
    }

    public function ownerDetail($id)
    {
        $owner = Owner::where('id', $id)->get();
        // dd($animal);
        return view('view-of-owner', compact('owner'));
    }
}
