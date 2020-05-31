<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{

	public function create(){
		return view('contact.create');
	}
    public function sotre(Request $request) {

$this->validate($request,[    	
    		'name' => 'required',
    		'email' => 'required|email',
    		'message' => 'required'
    	]);
$data=$request->all();
          Mail::to('meriammeri.mm@gmail.com')->send(new ContactFormMail($data));
        // dd(request()->all());
// return redirect()->route('category.index');
    }
}












