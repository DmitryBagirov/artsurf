<?php

namespace App\Http\Requests;

use App\Http\Requests\FormRequest;
use Illuminate\Validation\Rule;

class BriefRequest extends FormRequest
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
            'from' => 'string|max:255|required',
            'services' => 'string|max:255',
            'purposes' => 'string|required',
            'files' => 'nullable',
            'files.*' => 'file|max:51200',
            'files_description' => 'string|max:255|nullable',
            'website' => 'string|max:255|nullable',
            'deadline' => 'string|max:255|nullable',
            'email' => 'string|max:255|email|required',
            'phone' => 'string|nullable|regex:/^\+7\ \(\d{3}\)\ \d{3}\-\d{2}\-\d{2}$/',
            'references' => 'string|max:255|nullable',
        ];
    }
}
