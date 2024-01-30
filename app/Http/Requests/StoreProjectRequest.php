<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'min:8', 'max:150', Rule::unique('projects')->ignore($this->project)],
            'description' => ['required', 'min:20', 'max:500'],
            'type_id' => ['required', 'integer'],
        ];
    }

    /**
     * Return a string message for any errors occured during validation
     * 
     * @return string
     */
    public function messages() 
    {
        return [
            'title.required' => 'The title is necessary.',
                'title.max' => 'The title is too long.',
                'description.required' => 'The description is necessary',
                'description.max' => 'Your text is too long, can\'t exceed 500 characters.',
        ];
    }
}
