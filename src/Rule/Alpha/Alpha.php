<?php

namespace pebibits\validation\Rule\Alpha;
;

use Illuminate\Contracts\Validation\Rule;

class Alpha implements Rule
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
        return preg_match('/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',$value);
        // ^([a-zA-Z]+)(\s[a-zA-Z]+)*$
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'This cannot be a numeric.';
    }
}
