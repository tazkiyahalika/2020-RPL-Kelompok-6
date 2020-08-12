<?php

namespace App\Http\Controllers\Combinasi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\infraction;
//Nama Model Kamu Infraction bukan infraction
// Nama file Controller kamu Typo, sudah saya betulkan

use App\Http\Controllers\Controller;

class InfractionController extends Controller
{
    public function index()
    {
       // $infraction = DB::table('infractions')->get();
    	//return view('infraction');

    	// mengambil data dari table infraction
    	$infraction = DB::table('infractions')->get();
 
    	// mengirim data infraction ke view index
    	return view('index',['infraction' => $infraction]);
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

	public function create()
	{
		return view('create-infraction');
	}

	public function store(Request $request)
	{
		$this->validate($request,[
			'name_infraction' => 'required',
			'point'			  => 'required',

		]);

			DB::table('infractions')->insert([
			'name_infraction' => $request ->input('name_infraction'),
			'point'			  => $request ->input('point')
		]);

		return redirect('/infraction');
	}
   
}
