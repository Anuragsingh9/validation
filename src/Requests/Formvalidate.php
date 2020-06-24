<?php

namespace pebibits\validation\Requests;
use pebibits\validation\Rules\Alphanumeric;

use Illuminate\Foundation\Http\FormRequest;

class Formvalidate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'date'=>'required|after:yesterday',
            'name'=>['required',new Alphanumeric],
            'password'=>['required','regex:/^(?=.*\d)(?=.*[a-zA-Z])(?!.*\s).{8,15}$/'],
            'address'=>'required_if:name,anurag',
            'state'=>'in:Rajasthan,UP'
        ];
    }
}