<?php

namespace pebibits\validation\Rule\ColorName;

use Illuminate\Contracts\Validation\Rule;

class ColorName implements Rule
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
            return strlen($value)>=6;

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Color name should atleast of 6 digit.';
    }
}
