<?php

namespace App\Http\Requests\Introduction;

use Illuminate\Foundation\Http\FormRequest;

class IntroductionStoreRequest extends FormRequest
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
            'title'=>['required','string'],
            'title_en'=>['required','string'],
            'description'=>['required','string'],
            'description_en'=>['nullable','string'],
        ];
    }
}
