<?php
use App\Models\client;
use App\Models\livreur;
use App\Models\administrateur;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LivreurController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/index', function () {
    $clients = clients::get()->count();
    $livreurs = livreurs::get()->count();
    $admins = admins::get()->count();
    return view('pages/index',
    [
        'clients' => $clients,
        'livreurs' => $livreurs,
        'admins' => $admins
        ]
);
})->middleware(['auth', 'verified'])->name('index');

Route::resource('admin', AdminController::class);
Route::resource('client', ClientController::class);
Route::resource('livreur', LivreurController::class);
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

Route::get('/login', [AuthenticatedSessionController::class, 'login'])->name('login');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
