<?php

namespace App\Rules\Admin;

use Illuminate\Contracts\Validation\Rule;

class CapitalSentenceRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        
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
        preg_match('/^[A-Z].*/', $value, $matches);
        return count($matches) > 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Must have capital letters at the beginning of the sentence.';
    }
}
