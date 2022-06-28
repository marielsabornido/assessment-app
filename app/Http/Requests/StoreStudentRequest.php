<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ProgramIdValidation;
use App\Rules\CourseIdValidation;

class StoreStudentRequest extends FormRequest
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
            'student_number' => 'required|numeric',
            'first_name' => 'required|regex:/^[a-zA-ZñÑ\s\-\,]+$/u',
            'last_name' => 'required|regex:/^[a-zA-ZñÑ\s\-\,]+$/u',
            'date_enrolled' => 'required',
            'program_id' => ['required', new ProgramIdValidation],
            'course_ids' => ['array', new CourseIdValidation($this->program_id)],
        ];
    }

    public function messages()
    {
        return [
            'first_name.regex' => 'First name must be alpha characters.',
            'last_name.regex' => 'Last name must be alpha characters.',

            'program_id.required' => 'You cannot leave this empty, please select a program.',
        ];
    }
}
