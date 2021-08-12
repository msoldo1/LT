<?php

use App\Exports\ArtikalsExport;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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

Route::get('/', 'EtiketaController@index')->name('etikete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**Etikete**/
Route::get('etikete', 'EtiketaController@index')->name('etikete');
Route::get('etikete/create', 'EtiketaController@create');
Route::post('etikete', 'EtiketaController@store');
Route::get('etikete/{etiketa}', 'EtiketaController@show');
Route::get('etikete/{etiketa}/edit', 'EtiketaController@edit');
Route::patch('etikete/{etiketa}', 'EtiketaController@update');
Route::delete('etikete/{etiketa}','EtiketaController@destroy');

/**Gume**/
Route::get('gume', 'GumaController@index')->name('gume');
Route::get('gume/create', 'GumaController@create');
Route::post('gume', 'GumaController@store');
Route::get('gume/{guma}', 'GumaController@show');
Route::get('gume/{guma}/edit', 'GumaController@edit');
Route::patch('gume/{guma}', 'GumaController@update');
Route::delete('gume/{guma}','GumaController@destroy');

/**Kupci**/
Route::get('kupci', 'KupacController@index')->name('kupci');
Route::get('kupci/create', 'KupacController@create');
Route::post('kupci', 'KupacController@store');
Route::get('kupci/{kupac}', 'KupacController@show');
Route::get('kupci/{kupac}/edit', 'KupacController@edit');
Route::patch('kupci/{kupac}', 'KupacController@update');
Route::delete('kupci/{kupac}','KupacController@destroy');

/**Kolicina Gume**/
Route::get('kolicinaGuma/{guma}/create', 'kolicinaGumaController@create');
Route::post('kolicinaGuma', 'kolicinaGumaController@store');
Route::get('kolicinaGuma/{kolicinaGuma}', 'kolicinaGumaController@show');
Route::delete('kolicinaGuma/{kolicinaGuma}','kolicinaGumaController@destroy');

/**Cipke**/
Route::get('cipke', 'CipkaController@index')->name('cipke');
Route::get('cipke/create', 'CipkaController@create');
Route::post('cipke', 'CipkaController@store');
Route::get('cipke/{cipka}', 'CipkaController@show');
Route::get('cipke/{cipka}/edit', 'CipkaController@edit');
Route::patch('cipke/{cipka}', 'CipkaController@update');
Route::delete('cipke/{cipka}','CipkaController@destroy');

/**Kolicina Cipke**/
Route::get('kolicinaCipke/{cipka}/create', 'kolicinaCipkeController@create');
Route::post('kolicinaCipke', 'kolicinaCipkeController@store');
Route::get('kolicinaCipke/{kolicinaCipke}', 'kolicinaCipkeController@show');
Route::delete('kolicinaCipke/{kolicinaCipke}','kolicinaCipkeController@destroy');

/**Kutije**/
Route::get('kutije', 'KutijaController@index')->name('kutije');
Route::get('kutije/create', 'KutijaController@create');
Route::post('kutije', 'KutijaController@store');
Route::get('kutije/{kutija}', 'KutijaController@show');
Route::get('kutije/{kutija}/edit', 'KutijaController@edit');
Route::patch('kutije/{kutija}', 'KutijaController@update');
Route::delete('kutije/{kutija}','KutijaController@destroy');

/**Platna**/
Route::get('platna', 'PlatnoController@index')->name('platna');
Route::get('platna/create', 'PlatnoController@create');
Route::post('platna', 'PlatnoController@store');
Route::get('platna/{platno}', 'PlatnoController@show');
Route::get('platna/{platno}/edit', 'PlatnoController@edit');
Route::patch('platna/{platno}', 'PlatnoController@update');
Route::delete('platna/{platno}','PlatnoController@destroy');

/**Kolicina PLatna**/
Route::get('kolicinaPlatno/{platno}/create', 'kolicinaPlatnoController@create');
Route::post('kolicinaPlatno', 'kolicinaPlatnoController@store');
Route::get('kolicinaPlatno/{kolicinaPlatno}', 'kolicinaPlatnoController@show');
Route::delete('kolicinaPlatno/{kolicinaPlatno}','kolicinaPlatnoController@destroy');


/**Radovi**/
Route::get('radovi', 'RadController@index')->name('radovi');
Route::get('radovi/create', 'RadController@create');
Route::post('radovi', 'RadController@store');
Route::get('radovi/{rad}', 'RadController@show');
Route::get('radovi/{rad}/edit', 'RadController@edit');
Route::patch('radovi/{rad}', 'RadController@update');
Route::delete('radovi/{rad}','RadController@destroy');

/**Artikli**/
Route::get('artikli', 'ArtikalController@index')->name('artikli');
Route::get('artikli/create', 'ArtikalController@create');
Route::post('artikli', 'ArtikalController@store');
Route::get('artikli/{artikal}', 'ArtikalController@show');
Route::get('artikli/{artikal}/edit', 'ArtikalController@edit');
Route::patch('artikli/{artikal}', 'ArtikalController@update');
Route::delete('artikli/{artikal}','ArtikalController@destroy');
Route::get('/download', 'ArtikalController@export');

/**Kolicina Artikala**/
Route::get('kolicinaArtikla/{artikal}/create', 'kolicinaArtikalController@create');
Route::post('kolicinaArtikla', 'kolicinaArtikalController@store');
Route::get('kolicinaArtikla/{kolicinaArtikal}', 'kolicinaArtikalController@show');
Route::delete('kolicinaArtikla/{kolicinaArtikal}','kolicinaArtikalController@destroy');

/**Racuni**/
Route::get('racuni', 'RacunController@index')->name('racuni');
Route::get('racuni/create', 'RacunController@create');
Route::post('racuni', 'RacunController@store');
Route::get('racuni/{racun}', 'RacunController@show');
Route::get('racuni/{racun}/edit', 'RacunController@edit');
Route::patch('racuni/{racun}', 'RacunController@update');
Route::delete('racuni/{racun}','RacunController@destroy');

/**RacunArtikli**/
Route::get('racunArtikal', 'racunArtikalController@index')->name('racunArtikal');
Route::get('racunArtikal/{racun}/create', 'racunArtikalController@create');
Route::post('racunArtikal', 'racunArtikalController@store');
Route::get('racunArtikal/{racunArtikal}', 'racunArtikalController@show');
Route::get('racunArtikal/{racunArtikal}/edit', 'racunArtikalController@edit');
Route::patch('racunArtikal/{racunArtikal}', 'racunArtikalController@update');
Route::delete('racunArtikal/{racunArtikal}','racunArtikalController@destroy');

/** Test EXCEL **/
