<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PracticeAreaController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tentang-kami', [AboutController::class, 'index'])->name('about');

Route::get('/layanan', [ServiceController::class, 'index'])->name('services.index');
Route::get('/layanan/{slug}', [ServiceController::class, 'show'])->name('services.show');

Route::get('/area-praktik', [PracticeAreaController::class, 'index'])->name('practice-areas.index');
Route::get('/area-praktik/{slug}', [PracticeAreaController::class, 'show'])->name('practice-areas.show');

Route::get('/tim', [LawyerController::class, 'index'])->name('lawyers.index');
Route::get('/tim/{slug}', [LawyerController::class, 'show'])->name('lawyers.show');

Route::get('/artikel', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/artikel/{slug}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/kontak', [ContactController::class, 'index'])->name('contact');
Route::post('/kontak', [ContactController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('contact.store');

Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/disclaimer', [PageController::class, 'disclaimer'])->name('disclaimer');
Route::get('/kebijakan-privasi', [PageController::class, 'privacy'])->name('privacy');
Route::get('/syarat-ketentuan', [PageController::class, 'terms'])->name('terms');

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
