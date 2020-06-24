<?php

namespace pebibits\validation\Http\Controllers;
use pebibits\validation\Rules\Alphanumeric;
use pebibits\validation\Requests\Formvalidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class FormController extends Controller
{
    public function index()
    {
        return view('validation::form');
    }

    public function store(Formvalidate $request)
    {

       return $request->all();
    }
}


