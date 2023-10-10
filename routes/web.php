<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('register');
    
});

Route::get('/dashboard', function () {
    $oil = Service::where('service_type', 'oil change')->count();
    $water = $count = Service::where('service_type', 'water service')->count();
    $all = Service::all()->count();
    $data = [
        'all' => $all,
        'water' => $water,
        'oil' => $oil,
    ];


    return view('dashboard',compact('data'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
    Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('/service', [ServiceController::class, 'store'])->name('service.store');
    Route::get('/service/{service}', [ServiceController::class, 'show'])->name('service.show')->middleware('role:admin');
    Route::get('/service/{service}/edit', [ServiceController::class, 'edit'])->name('service.edit')->middleware('role:admin');
    Route::put('/service/{service}', [ServiceController::class, 'update'])->name('service.update')->middleware('role:admin');
    Route::delete('/service/{service}', [ServiceController::class, 'destroy'])->name('service.destroy')->middleware('role:admin');

   
});
Route::get('/contact',function(){
    return view('contact');
})->name('contact');

require __DIR__.'/auth.php';
