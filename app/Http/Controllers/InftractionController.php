<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\infraction;

class InfractionController extends Controller
{
    public function index()
    {
    	return view('infraction');
    }

     public function save(Request $request)
    {
 	$infraction = new infraction;
 	$infraction ->name  = $request->input('name infraction');
 	$infraction ->point = $request->input('point');
 	$infraction ->save();
 	return redirect('/infraction');

	}

   
}
