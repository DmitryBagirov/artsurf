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
            'name' => 'required',
            'organization' => 'required',
            'services' => 'required',
            'purposes' => 'required',
            'description' => '',
            'files' => '',
            'website' => '',
            'deadline' => '',
            'email' => 'required|email',
            'phone' => 'regex:/^\+7\ \(\d{3}\)\ \d{3}\-\d{2}\-\d{2}$/', //^(\+7|[7,8]\ ?)(\d{10}|(\(?\d{3}\)?\ ?\d{3}[\-,\ ]?\d{2}[\-,\ ]?\d{2}))$
            'references' => 'required',
        ];
    }
}
