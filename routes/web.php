<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\ClienteController;

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
Route::get('/csrf-token', function () {
    return response()->json(['token' => csrf_token()]);
});
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('login'); 
    });
    Route::get('/generate-barcode', [BarcodeController::class, 'generateBarcode'])->name('generateBarcode');
    Route::post('/generate-barcode', [BarcodeController::class, 'generateBarcode'])->name('generateBarcode');

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->middleware(['verified'])->name('dashboard');

    Route::get('/clientes', function () {
        return Inertia::render('Clientes');
    })->middleware(['verified'])->name('clientes');

    Route::get('/memberships', function () {
        return Inertia::render('Memberships');
    })->middleware(['verified'])->name('memberships');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/clientes-registrados', [ClienteController::class, 'index'])->name('pages.clientes');
    Route::post('/registrar-cliente', [ClienteController::class, 'store'])->name('pages.clientes');
});

Route::post('/logout', function () {
    auth()->logout();
    return redirect()->route('login');
})->name('logout');

require __DIR__.'/auth.php';
