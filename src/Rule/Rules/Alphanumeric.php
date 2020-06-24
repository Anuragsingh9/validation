<?php

namespace pebibits\validation\Rules;

use Illuminate\Contracts\Validation\Rule;

class Alphanumeric implements Rule
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
        // dd("ok");
        
        return preg_match('/(^[\w-]*$)/',$value);
        
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'You can only have aplhabates.';
    }
}
