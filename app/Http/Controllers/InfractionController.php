<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\infraction;
//Nama Model Kamu Infraction bukan infraction
// Nama file Controller kamu Typo, sudah saya betulkan
use App\Infraction;

class InfractionController extends Controller
{
    public function index()
    {
    	return view('infraction');
    }

     public function save(Request $request)
    {
	 $infraction = new Infraction;
	 // $infraction ->name  = $request->input('name infraction');
	 //gak ada field name di table infractions kamu
	$infraction ->name_infraction  = $request->input('name_infraction');
 	$infraction ->point = $request->input('point');
 	$infraction ->save();
 	return redirect('/infraction');

	}

   
}
