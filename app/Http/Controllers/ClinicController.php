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

    public function searchOwner(Request $request)
    {
        $search_term = $request->input('search');
        // $animals = Animal::where('name', 'like', '%' . $search_term . '%')->orderBy('name', 'asc')->get();
        $owners = Owner::where('first_name', 'like', '%' . $search_term . '%')->orderBy('surname', 'asc')->get();
        return view('owners', compact('owners'));
    }

    public function searchAnimal(Request $request)
    {
        $search_term = $request->input('search');
        $animals = Animal::where('name', 'like', '%' . $search_term . '%')->orderBy('name', 'asc')->get();

        return view('animals', compact('animals'));
    }
}
