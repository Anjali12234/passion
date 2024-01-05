<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUS\StoreContactUsRequest;
use App\Models\ContactUs;
use App\Models\User;
use App\Notifications\ContactFormSubmitted;

class ContactUsController extends Controller
{
    public function index()
    {
        $contacts = ContactUs::latest()->paginate(10);
        return view('backend.contact.index', compact('contacts'));
    }

    public function store(StoreContactUsRequest $request)
    {
        $contact = ContactUs::create($request->validated());
        // $adminUser = User::where('email', 'admin@admin.com')->first();
        // $adminUser->notify(new ContactFormSubmitted($contact));
        return back()
            ->with('success', 'Feedback  has been sent successfully.');
    }

    public function destroy(ContactUs $contact)
    {
        $contact->delete();
        return back();
    }
}
