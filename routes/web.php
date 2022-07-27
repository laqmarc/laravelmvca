<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});
// Route::resource('clubs' , 'App\Http\Controllers\ClubController');
// Route::resource('teams' , 'App\Http\Controllers\TeamController'); 


//CLUBS

Route::get('clubs',[ClubController::class, 'index'])->name('clubs.index'); //ok

Route::get('clubs/create', [ClubController::class, 'create'])->name('clubs.create');//ok

Route::post('clubs', [ClubController::class, 'create_club'])->name('clubs.create_club');

Route::get('clubs/{clubs}/edit',[ClubController::class, 'edit'])->name('clubs.edit'); //ok

Route::put('clubs/{clubs}', [ClubController::class, 'update'])->name('clubs.update'); //ok

Route::delete('clubs/{clubs}/delete',[ClubController::class, 'destroy'])->name('clubs.destroy');


//TEAMS

Route::get('teams', [TeamController::class, 'index'])->name('teams.index');//ok

Route::get('teams/create', [TeamController::class, 'create'])->name('teams.create');//ok

Route::post('teams', [TeamController::class, 'create_team'])->name('teams.create_teams');//ok

Route::get('teams/{teams}/edit',[TeamController::class, 'edit'])->name('teams.edit');//???

Route::put('teams/{teams}', [TeamController::class, 'update'])->name('teams.update');

Route::delete('teams/{teams}/delete' , [TeamController::class, 'destroy'])->name('teams.destroy');//ok
