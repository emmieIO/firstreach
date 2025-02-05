<?php

namespace App\Http\Controllers;

use App\Models\CustomerMessage;
use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactFormConfirmation;

class CustomerMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.messages.index', [
            'messages' => CustomerMessage::latest()->paginate(10)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:150',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        $message = CustomerMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject ?? 'No Subject',
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
        Mail::to($request->email)->send(new ContactFormConfirmation($message));
        return redirect()->back()->with('success', 'Message sent successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($uuid)
    {
        $message = CustomerMessage::where('uuid', $uuid)->first();
        if (!$message) {
            return redirect()->back()->with('error', 'Message not found');
        }
        return view('admin.messages.show', compact('message'));

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($uuid)
    {
        $message = CustomerMessage::where('uuid', $uuid)->delete();
        if (!$message) {
            return redirect()->back()->with('error', 'Message not found');
        }

        return redirect()->back()->with('success', 'Message deleted successfully');
    }
}
