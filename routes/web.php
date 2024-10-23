<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AtensiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AuthController;
use App\Exports\AgendaExport;
use Illuminate\Support\Facades\Auth;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});



// Rute setelah login berhasil

// Kelompok rute untuk pengguna yang telah login (user biasa)
Route::middleware(['auth', 'role:user'])->group(function () {
    // Rute untuk dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Rute untuk agenda
    Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');
    Route::get('/agenda/create', [AgendaController::class, 'create'])->name('agenda.create');
    Route::post('/agenda', [AgendaController::class, 'store'])->name('agenda.store');
    Route::get('/agenda/{id}/edit', [AgendaController::class, 'edit'])->name('agenda.edit');
    Route::put('/agenda/{id}', [AgendaController::class, 'update'])->name('agenda.update');
    Route::delete('/agenda/{id}', [AgendaController::class, 'destroy'])->name('agenda.destroy');
    Route::get('/agenda/export', [AgendaController::class, 'export'])->name('agenda.export');

    // Rute untuk atensi
    Route::prefix('forms')->group(function () {
        Route::resource('atensi', AtensiController::class);
        Route::get('/atensi', [AtensiController::class, 'index'])->name('atensi.index');
        Route::get('/atensi/create', [AtensiController::class, 'create'])->name('forms.atensi.create');
        Route::post('/atensi/store', [AtensiController::class, 'store'])->name('atensi.store');
        Route::get('/atensi/{id}', [AtensiController::class, 'show'])->name('atensi.show');
        Route::get('/atensi/{id}/edit', [AtensiController::class, 'edit'])->name('atensi.edit');
        Route::put('/atensi/{id}', [AtensiController::class, 'update'])->name('atensi.update');
        Route::delete('/atensi/{id}', [AtensiController::class, 'destroy'])->name('atensi.destroy');
    });
});

// Rute untuk profil
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Kelompok rute untuk admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard'); // Rute dashboard admin
});

// Kelompok rute untuk super admin
Route::middleware(['auth', 'role:super_admin'])->group(function () {
    Route::get('/super-admin/dashboard', [SuperAdminController::class, 'index'])->name('super_admin.dashboard'); // Rute dashboard super admin
});

// Rute untuk mengekspor agenda
Route::get('/export-agenda', function () {
    $export = new AgendaExport();
    return $export->export();
});

Route::get('login', [AuthController::class,'index'])->name('login');
Route::get('register', [AuthController::class,'register'])->name('register');
Route::post('proses_login', [AuthController::class,'proses_login'])->name('proses_login');
Route::post('logout', [AuthController::class,'logout'])->name('logout');

Route::post('proses_register',[AuthController::class,'proses_register'])->name('proses_register');

// kita atur juga untuk middleware menggunakan group pada routing
// didalamnya terdapat group untuk mengecek kondisi login
// jika user yang login merupakan admin maka akan diarahkan ke AdminController
// jika user yang login merupakan user biasa maka akan diarahkan ke UserController
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('user', UserController::class);
    });
});



