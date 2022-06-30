<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class BuzonController extends Controller
{
    public function index(){
        return view('buzon.index');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|email',
            'phone' => 'required|max:10',
            'message' => 'required',
        ]);

        $correo = new ContactanosMailable($request->all());
        Mail::to('tlapatilistli@gmail.com')->send($correo);
        return redirect()->route('buzon')->with('info', 'Buzon recibido');
    }
}