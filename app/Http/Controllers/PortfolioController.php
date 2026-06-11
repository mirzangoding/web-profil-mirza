<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'service' => 'nullable|string|max:100',
            'message' => 'required|string|min:5',
        ]);

        Message::create($validated);

        return back()->with('success', 'Pesan berhasil terkirim! Terima kasih, ' . $validated['name'] . '. Saya akan segera membalas dalam 24 jam. 🙏');
    }

    public function inbox()
    {
        $messages = Message::latest()->get();
        return view('admin.inbox', compact('messages'));
    }

    public function markRead(Message $message)
    {
        $message->update(['is_read' => true]);
        return back();
    }

    public function deleteMessage(Message $message)
    {
        $message->delete();
        return back()->with('deleted', 'Pesan dihapus.');
    }
}
