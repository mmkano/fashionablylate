<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contacts = Contact::all();
        $contacts = Contact::paginate(7);
        return view('admin', compact('contacts'));
    }

    public function search(Request $request)
    {
        $query = Contact::query();

        if ($request->filled('content')) {
            $keyword = $request->content;
            $query->where(function ($q) use ($keyword) {
                $q->where('first', 'LIKE', "%{$keyword}%")
                  ->orWhere('last', 'LIKE', "%{$keyword}%");
            });
        }

        if ($request->filled('email')) {
            $query->where('email', 'LIKE', "%{$request->email}%");
        }

        if ($request->filled('gender')) {
            $query->where('gender', $request->gender);
        }

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->filled('date')) {
            $query->whereDate('created_at', '=', $request->date);
        }

        $contacts = $query->get();

        return view('admin', compact('contacts'));
    }

}
