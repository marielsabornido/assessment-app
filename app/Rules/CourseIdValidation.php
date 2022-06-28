<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Program;

class CourseIdValidation implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($program_id)
    {
        $this->program_id = $program_id;
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
        $program = Program::with(['courses:id,program_id'])->select(['id'])->find($this->program_id);
        $courses_ids = $program->courses->pluck('id')->toArray();

        foreach($value as $id) {
            if(!in_array($id, $courses_ids)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The selected courses is invalid.';
    }
}
