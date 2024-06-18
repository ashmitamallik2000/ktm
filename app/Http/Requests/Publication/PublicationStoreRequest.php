<?php

namespace App\Http\Requests\Publication;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PublicationStoreRequest extends FormRequest
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
            'title'=>['required', 'string'],
            'title_en'=>['required', 'string'],
            'document_id'=>['required', Rule::exists('documents','id')->withoutTrashed()],
            'date'=>['required', 'string'],
            'photo'=>['required', 'file','mimes:png,jpg,jpeg,pdf'],
            'position'=>['required', 'string'],
            'publisher'=>['nullable', 'string'],
            'publisher_en'=>['nullable', 'string'],
            'description'=>['required', 'string'],
            'description_en'=>['nullable', 'string'],
        ];
    }
}
