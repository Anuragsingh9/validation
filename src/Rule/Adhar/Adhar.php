<?php

namespace pebibits\validation\Rule\Adhar;

use Illuminate\Contracts\Validation\Rule;

class Adhar implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return preg_match('/(^[A-Z]{2}[0-5]{4}\s{0,1}[0-9]{3}$)/',$value);
        // ^[1-9]{1} - PIN Code that starts with digits 1-9
        // [0-9]{2} - Next two digits may range from 0-9
        // \s{0,1} - Space that can occur once or never
        // [0-9]{3}$ - Last 3 needs to be digits ranging from 0-9
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Please Enter Correct Adhar.';
    }
}
