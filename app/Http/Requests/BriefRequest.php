<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BriefRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'string|max:100|required',
            'organization' => 'string|max:255|required',
            'services' => 'required',
            'purposes' => 'string|max:5000|required',
            'description' => 'string|max:5000',
            'files' => 'file', //file
            'website' => 'string|max:255|string',
            'deadline' => 'string|',
            'email' => 'string|required|email',
            'phone' => 'string|regex:/^\+7\ \(\d{3}\)\ \d{3}\-\d{2}\-\d{2}$/', //^(\+7|[7,8]\ ?)(\d{10}|(\(?\d{3}\)?\ ?\d{3}[\-,\ ]?\d{2}[\-,\ ]?\d{2}))$
            'references' => 'string|required',
        ];
    }
}
