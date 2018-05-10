<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;
class ContactController extends Controller
{
    public function index(){
    	return view('pages.contact');
    }

    public function add(){
    	return view('pages.add');
    }

    public function save(Request $request){
    	$contact = new Contacts();

    	$contact->fullname= $request->fullname;
    	$contact->age= $request->age;
    	$contact->address= $request->address;
    	$contact->email= $request->email;
    	$contact->phone= $request->phone;

    	$contact->save();
    	return $contact;
    }
}
