<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\ResultController;
use App\Models\Division;



Route::get('/api/divisions/{districtId}', function ($districtId) {
    return Division::where('district_id', $districtId)->get();
});

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

Route::get('/',[HomeController :: class , 'index'])->name('index');
Route::get('/add-party',[HomeController :: class , 'add_party'])->name('add.party');


Route::resource('parties', PartyController::class);
Route::get('/parties/{id}/edit', [PartyController::class, 'edit'])->name('parties.edit');
Route::put('/parties/{id}', [PartyController::class, 'update'])->name('parties.update');


Route::resource('members', MemberController::class);
Route::resource('districts', DistrictController::class);
Route::resource('divisions', DivisionController::class);
Route::resource('results', ResultController::class);

Route::get('/division/{division}/results', [ResultController::class, 'show'])->name('division.results');
Route::get('/districts/{id}/result', [ResultController::class, 'showDistrictResult'])->name('district.result');


