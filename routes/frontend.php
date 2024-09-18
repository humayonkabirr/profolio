<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\TemplateController;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

route::get('/',[TemplateController::class,'index'])->name('home');
route::get('/about',[TemplateController::class, 'about'])->name('about');
route::get('/service',[TemplateController::class,'service'])->name('service');
route::get('/portfolio',[TemplateController::class,'portfolio'])->name('portfolio');
route::get('/blog',[TemplateController::class,'blog'])->name('blog');
route::get('/blog-details',[TemplateController::class,'blogDetails'])->name('blogDetails');
route::get('/contact',[TemplateController::class,'contact'])->name('contact');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
