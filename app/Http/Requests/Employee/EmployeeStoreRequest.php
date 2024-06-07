<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmployeeStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'name_en'=> ['required', 'string'],
            'email' => ['required', 'string'],
            'department_id' => ['required', Rule::exists('departments','id')->withoutTrashed()],
            'designation_id' => ['required',  Rule::exists('departments','id')->withoutTrashed()],
            'phone' => ['required', 'string'],
            'position'=> ['required', 'string'],
            'photo' => ['required', 'mimes:jpg,png,webp'],
        ];
    }
}
