<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Program;

class ProgramIdValidation implements Rule
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
        $program = Program::select(['id'])->find($value);

        return $program ? true : false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The selected program is invalid.';
    }
}
