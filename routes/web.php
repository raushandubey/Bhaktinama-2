<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PanditController;

// Frontend Routes
Route::get('/',[UserController::class,'index'])->name("homepage");
Route::get('/services',[UserController::class,'services'])->name("services");
Route::get('/shop',[UserController::class,'shop'])->name("shop");
Route::get('/about',[UserController::class,'about'])->name("about");
Route::get('/blog',[UserController::class,'blog'])->name("blog");
Route::get('/contact',[UserController::class,'contact'])->name("contact");
Route::get('/login',[UserController::class,'login'])->name("login");
Route::get('/register',[UserController::class,'register'])->name("register");
Route::get('/adminlogin',[UserController::class,'adminlogin'])->name("adminlogin");
Route::get('/panditlogin',[UserController::class,'panditlogin'])->name("panditlogin");
Route::get('/panditregister',[UserController::class,'panditregister'])->name("panditregister");
Route::get('/bookpandit',[UserController::class,'bookpandit'])->name("bookpandit");
Route::get('/astrology',[UserController::class,'astrology'])->name("astrology");
Route::get('/temple',[UserController::class,'temple'])->name("temple");
Route::get('/kundalini',[UserController::class,'kundalini'])->name("kundalini");
Route::get('/annaprashan',[UserController::class,'annaprashan'])->name("annaprashan");

// Pandit Authentication Routes
Route::get('/panditlogin', [PanditController::class, 'showLoginForm'])->name('panditlogin');
Route::post('/panditlogin', [PanditController::class, 'login'])->name('pandit.login.submit');
Route::get('/panditregister', [PanditController::class, 'showRegistrationForm'])->name('panditregister');
Route::post('/panditregister', [PanditController::class, 'register'])->name('pandit.register.submit');

// Pandit Dashboard Routes (Protected)
Route::middleware(['auth:pandit'])->prefix('pandit')->name('pandit.')->group(function () {
    Route::get('/dashboard', [PanditController::class, 'dashboard'])->name('dashboard');
    Route::get('/bookings', [PanditController::class, 'bookings'])->name('bookings');
    Route::get('/profile', [PanditController::class, 'profile'])->name('profile');
    Route::put('/profile', [PanditController::class, 'updateProfile'])->name('profile.update');
    Route::post('/logout', [PanditController::class, 'logout'])->name('logout');
});

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Admin Authentication
    Route::post('/login', [AdminController::class, 'login'])->name('login.submit');
    
    // Admin Dashboard Routes (protected by middleware in real implementation)
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/bookings', [AdminController::class, 'bookings'])->name('bookings');
    
    // Pandit Management
    Route::get('/pandits', [AdminController::class, 'pandits'])->name('pandits');
    Route::get('/pandits/create', [AdminController::class, 'createPandit'])->name('pandits.create');
    Route::post('/pandits', [AdminController::class, 'storePandit'])->name('pandits.store');
    
    // Temple Management
    Route::get('/temples', [AdminController::class, 'temples'])->name('temples');
    Route::get('/temples/create', [AdminController::class, 'createTemple'])->name('temples.create');
    Route::post('/temples', [AdminController::class, 'storeTemple'])->name('temples.store');
    
    // Product Management
    Route::get('/products', [AdminController::class, 'products'])->name('products');
    Route::get('/products/create', [AdminController::class, 'createProduct'])->name('products.create');
    Route::post('/products', [AdminController::class, 'storeProduct'])->name('products.store');
});

// User Authentication Routes
Route::post('/login', [UserController::class, 'loginUser'])->name('login.submit');
Route::post('/register', [UserController::class, 'registerUser'])->name('register.submit');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// User Dashboard Routes (Protected)
Route::middleware(['auth'])->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/profile/edit', [UserController::class, 'editProfile'])->name('profile.edit');
    Route::put('/profile', [UserController::class, 'updateProfile'])->name('profile.update');
    Route::get('/change-password', [UserController::class, 'showChangePasswordForm'])->name('change-password');
    Route::put('/change-password', [UserController::class, 'updatePassword'])->name('change-password.update');
    Route::get('/bookings', [UserController::class, 'bookings'])->name('bookings');
    Route::get('/orders', [UserController::class, 'orders'])->name('orders');
});

