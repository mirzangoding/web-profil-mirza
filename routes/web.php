<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ChatbotController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::post('/contact', [PortfolioController::class, 'contact'])->name('contact.send');
Route::post('/chatbot', [ChatbotController::class, 'chat'])->name('chatbot.chat');

// Admin Inbox (simple, no auth)
Route::get('/admin/inbox', [PortfolioController::class, 'inbox'])->name('admin.inbox');
Route::post('/admin/inbox/{message}/read', [PortfolioController::class, 'markRead'])->name('admin.message.read');
Route::delete('/admin/inbox/{message}', [PortfolioController::class, 'deleteMessage'])->name('admin.message.delete');
