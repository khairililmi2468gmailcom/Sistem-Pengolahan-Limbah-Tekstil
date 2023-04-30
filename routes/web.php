<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManageTextileController;
use App\Models\TableUserModel;
use App\Models\TableTextilModel;
use App\Http\Controllers\KelolaDonasiController;
use App\Http\Controllers\KelolaKoinController;
use App\Http\Controllers\SearchController;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Auth;

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
    return view('landingpage');
});

Route::get('/halamanjual', function () {
    return view('halamanjual');
});

Route::get('/halamandonasi', function () {
    return view('halamandonasi');
});

Route::get('/halamanprosedur', function () {
    return view('halamanprosedur');
});

Route::get('/pengelolaan', function () {
    return view('pengelolaan');
});

Route::get('/halamantentang', function () {
    return view('halamantentang');
});

Route::get('/reqsuccess', function () {
    return view('reqsuccess');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware([CheckRole::class.':admin'])->group(function (){
        Route::get('/admin',[AdminController::class, 'index'])->name('admin');
        Route::get('/manage-user',[ManageUserController::class, 'index'])->name('manage-user');
        Route::get('/kelola-donasi',[KelolaDonasiController::class,'index'])->name('kelola-donasi');
        Route::get('/manage-textil',[ManageTextileController::class, 'index'])->name('manage-textil');
        Route::get('/kelola-koin',[KelolaKoinController::class,'index'])->name('kelola-koin');
        Route::get('/create-user',[ManageUserController::class, 'create'])->name('create-user');
        Route::get('/create-textil',[ManageTextileController::class, 'create'])->name('create-textil');
        Route::post('/simpan-user',[ManageUserController::class, 'store'])->name('simpan-user');
        Route::get('/manage-user/cari',[ManageUserController::class, 'cari'])->name('cari');
        Route::post('/simpan-textil',[ManageTextileController::class, 'store'])->name('simpan-textil');
        Route::get('/search', [SearchController::class, 'search'])->name('search');
        // Route::post('/search', [SearchController::class, 'search'])->name('search.post');
        Route::get('/count', function () {
            $count = DB::table('users')->count(); // Hitung jumlah data di dalam tabel
            return response()->json(['count' => $count]); // Mengembalikan respons dalam bentuk JSON
        });
        
    });
});

require __DIR__.'/auth.php';

