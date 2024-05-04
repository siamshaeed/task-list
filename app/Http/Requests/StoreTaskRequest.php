<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
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
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'long_description' => 'required',
        ];
    }

    public function messages(): array
{
    return [
        'title.required' => 'The title field is must be required',
        'description.required' => 'The description field is must be required',
        'long_description.required' => 'The description field is must be required'

    ];
}


}
