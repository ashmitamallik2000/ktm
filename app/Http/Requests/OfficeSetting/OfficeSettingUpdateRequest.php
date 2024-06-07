<?php

namespace App\Http\Requests\OfficeSetting;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OfficeSettingUpdateRequest extends FormRequest
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
            'office_name' => ['required', 'string'],
            'office_name_en' => ['required', 'string'],
            'email' => ['nullable', 'string'],
            'phone' => ['nullable', 'string'],
            'logo' => ['nullable', 'mimes:jpeg,png,jpg,gif,webp'],
            'flag' => ['nullable', 'mimes:jpeg,png,jpg,gif,webp'],
            'background_image' => ['nullable', 'mimes:jpeg,png,jpg,'],
            'Map_iframe' => ['nullable', 'url'],
            'Facebook_iframe' => ['nullable', 'url'],
            'Twitter_iframe' => ['nullable', 'url'],
            'information_officer_id' => ['nullable', Rule::exists('employees', 'id')->withoutTrashed()],
            'office_head_id' => ['nullable', Rule::exists('employees', 'id')->withoutTrashed()],
            'spoke_person_id' => ['nullable', Rule::exists('employees', 'id')->withoutTrashed()],
        ];
    }
}
