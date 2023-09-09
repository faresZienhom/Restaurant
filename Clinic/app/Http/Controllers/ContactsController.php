<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contacts::get();
        return view('admin.contactus.index', compact('contacts'));
    }
    public function destroy(string $id)
    {
        Contacts::where('id', $id)->delete();
        return redirect()->route('contact.index');
    }

}
