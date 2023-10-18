<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('contact');
    }

    public function confirm(ContactRequest $request) {
        $contact = $request->only(['last-name', 'first-name', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request) {
        $contact = $request->only(['last-name', 'first-name', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
        Contact::create($contact);
        return view('thanks');
    }

    public function page() {
        $contacts = Contact::Paginate(1);
        return view('/contacts/search', compact('contacts'));
    }

    public function search(Request $request) {
        $contacts = Contact::all()->LastNameSearch($request->last_name)->GenderSearch($request->gender)->CreatedSearch($request->created_at)->EmailSearch($request->email)->get();
        return view('management', compact('contacts'));
    }

    public function destroy(Request $request) {
        Contact::find($request->id)->delete();
        return redirect('/contacts/search');
    }
}
