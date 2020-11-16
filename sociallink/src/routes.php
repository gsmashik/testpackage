<?php 
 
use Illuminate\Support\Facades\Route;
use olee\sociallink\Controllers\SocialLinkController;
Route::get('/test', [SocialLinkController::class, 'test'])->name('posts.store');