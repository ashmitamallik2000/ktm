<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeUpdateRequest extends FormRequest
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
            'department_id' => ['required', 'string'],
            'description_id' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'position'=> ['required', 'string'],
            'photo' => ['required', 'mimes:jpg,png,webp'],
        ];
    }
}
