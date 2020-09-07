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

    	$infraction = DB::table('infractions')->get();		// mengambil data dari table infraction
    	return view('infraction.index-list',['infraction' => $infraction]);
    		// mengirim data infraction ke view index
    }


     //public function save(Request $request)
   // {
	 //$infraction = new Infraction;
	 // $infraction ->name  = $request->input('name infraction');
	 //gak ada field name di table infractions kamu
	//$infraction -> name_infraction  = $request -> input('name_infraction');
 	//$infraction -> point = $request -> input('point');
 	//$infraction -> save();
 	//return redirect('/infraction');
	//}


	public function add()
	{
		$datap= DB::table('infractions')
    	->select('name_infraction','code')
    	->get();
    	
    	return view('infraction.create-infraction',['datap' => $datap]);
	}

	public function AddCode()
	{
		$datap= DB::table('infractions')
    	->select('name_infraction','code')
    	->get();
    	
    	return view('infraction.add_code',['datap' => $datap]);
	}

	public function StoreCode(Request $request)
	{
		//insert data ke table infraction

			DB::table('infractions')->insert([

			'code'			  => $request -> input('code'),
			'name_infraction' => 'null',
			'point'			  => $request -> input('point') 
		]);

		return redirect('/infraction');	
	}

	public function store(Request $request)
	{
		//insert data ke table infraction
			$code = $request -> input('code');

			if ($code == 'A1')
			{
				$point = 2;
			}
			elseif ($code == 'A2')
			{
				$point = 3;
			}
			elseif ($code == 'A3')
			{
				$point = 5;
			}
			elseif ($code == 'A4')
			{
				$point = 10;
			}
			elseif ($code == 'A5')
			{
				$point = 20;
			}
			elseif ($code == 'A6')
			{
				$point = 40;
			}
			elseif ($code == 'A7')
			{
				$point = 50;
			}
			elseif ($code == 'A8')
			{
				$point = 60;
			}
			elseif ($code == 'A9')
			{
				$point = 100;
			}

			DB::table('infractions')->insert([
			'name_infraction' => $request -> input('name_infraction'),
			'code'			  => $code,
			'point'			  => $point 
		]);

		return redirect('/infraction');		//mengalihkan ke halaman infraction
	}

	public function edit($id)
	{
		$infraction = DB::table('infractions')-> where('id', $id) -> get(); 	//mengambil data infraction berdasarkan id yang dipilih
		return view('infraction.edit-infraction',['infraction' => $infraction]);			//passing data infraction yang didapat ke view edit-infraction.blade.php
		//return view('edit-infraction',{infraction/{$id}/edit});

	}

	public function update(Request $request)
	{
		DB::table('infractions')-> where('id',$request->id) -> update([
			'name_infraction' => $request ->name_infraction,
			'point'			  => $request ->point
		]);	

		return redirect('/infraction');	
	}
   
   // method untuk hapus data infraction
	public function delete($id)
	{
	// menghapus data infraction berdasarkan id yang dipilih
	DB::table('infractions')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman infraction
	return redirect('/infraction');
	}


}
