<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MatController;

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

Route::get('clubs',[ClubController::class, 'index'])->name('clubs.index'); 

Route::get('clubs/create', [ClubController::class, 'create'])->name('clubs.create');

Route::post('clubs', [ClubController::class, 'create_club'])->name('clubs.create_club');

Route::get('clubs/{clubs}/edit',[ClubController::class, 'edit'])->name('clubs.edit'); 

Route::put('clubs/{clubs}', [ClubController::class, 'update'])->name('clubs.update'); 

Route::delete('clubs/{clubs}/delete',[ClubController::class, 'destroy'])->name('clubs.destroy');


//TEAMS

Route::get('teams', [TeamController::class, 'index'])->name('teams.index');

Route::get('teams/create', [TeamController::class, 'create'])->name('teams.create');

Route::post('teams', [TeamController::class, 'create_team'])->name('teams.create_teams');

Route::get('teams/{teams}/edit',[TeamController::class, 'edit'])->name('teams.edit');

Route::put('teams/{teams}', [TeamController::class, 'update'])->name('teams.update');

Route::delete('teams/{teams}/delete' , [TeamController::class, 'destroy'])->name('teams.destroy');

//MATCHES

Route::get('matchs', [MatController::class, 'index'])->name('matchs.index');

Route::get('matchs/create', [MatController::class, 'create'])->name('matchs.create');

Route::post('matchs', [MatController::class, 'create_match'])->name('matchs.create_match');

Route::get('matchs/{match}/edit',[MatController::class, 'edit'])->name('matchs.edit');

Route::put('matchs/{match}', [MatController::class, 'update'])->name('matchs.update');

Route::delete('matchs/{match}/delete' , [MatController::class, 'destroy'])->name('matchs.destroy');
