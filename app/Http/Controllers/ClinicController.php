<?php

namespace App\Http\Controllers;
use App\Models\Animal;

use Illuminate\Http\Request;

class ClinicController extends Controller
{
    public function displayAnimals()
    {
        $animals = Animal::orderBy('name',) ->get();

        return view('viewOfAnimal', compact('animals'));
    }
    
}