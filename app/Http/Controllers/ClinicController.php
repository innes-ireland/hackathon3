<?php

namespace App\Http\Controllers;
use App\Models\Animal;

use Illuminate\Http\Request;

class ClinicController extends Controller
{
    public function index()
    {
        $animals = Animal::orderBy('name',) ->get();

        return view('/');
    }
}