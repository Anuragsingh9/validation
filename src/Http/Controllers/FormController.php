<?php

namespace pebibits\validation\Http\Controllers;
use pebibits\validation\Rules\Alphanumeric;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class FormController extends Controller
{
    public function index()
    {
        return view('validation::form');
    }

    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'date'=>'required|after:yesterday',
            'name'=>['required',new Alphanumeric]
        ]);
        return $request->all();
    }
}


