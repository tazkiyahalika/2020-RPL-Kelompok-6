<?php

use Illuminate\Support\Facades\Route; 
//Kegunaan illmuniate adalah mesin database laravel.
//Kegunaan facades adalah bentuk sebuah class dengan method static yang bila 
//diapanggil akan memanggil method di object lain yang di 'facade' olehnya.
//Kegunaan route adalah  sebagai media untuk menghubungkan suatu jaringan komputer 
//dengan jaringan komputer lainnya yang berbeda protkokol, dan cuma class helper 
//yang ngegenerate semua route untuk authentikasi.	
//kesimpulannnya adalah database pendukung untuk menginplemasikan sebuah data sehingga 
//dapat dihubungkan melalui jaringan komputer menjadi sebuah tampilan.
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//kegunaannya adalah untuk menangani request kita di Url kemudian mengarahkan 
//aplikasi untuk memanggil halaman/resource homeController  tertentu. Dalam Routing 
//kita akan mengenal yaitu get, get digunakan untuk menampilkan resource bisa berupa 
//fungsi Controller.

	return view('auth.login');
	//kegunaannya adalah perintah menginstruksikan kepada PHP bahwa pemprosesan fungsi telah selesai, 
	//Untuk lebih mudahnya kita akan memuat beberapa program dengan cara menggunakan return. 
	//dan selanjutnya untuk auth login itu kegunaanya untuk memanggil file login yang ada di folder auth. 
   }); 

Route::get('/kedua', function () {
	return view('halaman1');
	//kegunaanya adalah perintah untuk menangani request di url, kemudian mengarahkan aplikasi untuk memanggil
	//halaman/resource di folder view dengan memamnggil file yang bernama halaman1.
   });

Auth::routes();
//kegunaannya adalah sebagai media untuk menghubungkan suatu jaringan komputer dengan jaringan komputer lainnya 
//yang berbeda protkokol, dan cuma class helper yang ngegenerate semua route untuk authentikasi.

Route::get('/home', 'Combinasi\HomeController@index')->name('home');
//kegunaannya adalah untuk menangani request kita di Url kemudian mengarahkan aplikasi untuk memanggil 
//halaman/resource homeController  tertentu. Dalam Routing kita akan mengenal yaitu get, get digunakan 
//untuk menampilkan resource bisa berupa fungsi Controller.
//dan untuk home kegunaanya yaitu untuk memanggil file yang ada sudah terisi data yang mengalamatkan ke url home.

Route::get('/infraction', 'Combinasi\InfractionController@index');
//kegunaannya adalah untuk menangani request kita di Url kemudian mengarahkan aplikasi untuk memanggil 
//halaman/resource InfractionController. Dalam Routing kita akan mengenal yaitu get, get digunakan 
//untuk menampilkan resource bisa berupa fungsi Controller.
//@index berfungsi untuk mengambil data pada metod index di InfractionController yang akan ditampilkan 
//di file view.

Route::post('/infraction', 'Combinasi\InfractionController@save');
//kegunaannya adalah untuk menangani request kita di Url kemudian mengarahkan aplikasi untuk memanggil 
//halaman/resource InfractionController. Dalam Routing kita akan mengenal yaitu Post, post digunakan 
//untuk mengarahkan form ketika di submit. Sedangkan save digunakan untuk menyimpan data yang kita 
//masukan pada controller yang nantinya tersimpan di database.

//ketentuan : dalam projek ini belum menggunakan middleware karema kita belum membuat form login dan register.

Route::get('/infraction/create', 'Combinasi\InfractionController@create');