
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

/**Route::get('/', function () {
	
    return view('welcome');
});*/

Route::get('/Accueil', function () {

	return view('user');
});

Route::get('/Professeur',function() {

	return view('userProf');
});

Route::get('/Etudiant',function() {

	return view('userEtu');
});
Route::get('/Responsable',function() {

	return view('userResp');
});



