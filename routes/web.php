<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ChatbotController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::post('/contact', [PortfolioController::class, 'contact'])->name('contact.send');
Route::post('/chatbot', [ChatbotController::class, 'chat'])->name('chatbot.chat');

