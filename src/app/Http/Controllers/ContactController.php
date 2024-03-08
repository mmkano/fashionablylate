<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;


class ContactController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function confirm(ContactRequest $request){
        $contact = $request->only(['category_id','first','last','gender','email','area','prefix','line','address','building','content']);
        $tel = $request->input('area').'-'.$request->input('prefix').'-'.$request->input('line');
        $contact['tel'] = $tel;
        $categories = Category::all();
        
        return view('confirm', compact('contact','categories'));
    }

    public function store(Request $request){
        $nameParts = explode(' ', $request->input('name'), 2);
        $first = $nameParts[0];
        $last = $nameParts[1] ?? '';

        $contact = $request->only(['category_id','first','last', 'gender','email','tel','address','building','content']);

        $contact['first'] = $first;
        $contact['last'] = $last;

        
        Contact::create($contact);
        return view('thanks');

    }

}
