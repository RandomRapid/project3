<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DbController extends Controller
{
    // Show the create pizza form
    public function createPizzaForm(Request $request)
    {
        return view('database');
    }

    // Handle the pizza form submission and store the data in the database
    public function pizzaForm(Request $request)
    {
        // Logic to store form data in the database goes here

        return view('showdatabase');
    }
}