<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class identityRequest extends FormRequest
{
    public function rules()
    {
        return [
            'first_name' => ['required'],
            'middle_name' => ['nullable'],
            'last_name' => ['required'],
            'birthday' => ['nullable', 'date'],
            'job' => ['nullable'],
            'company' => ['nullable'],
        ];
    }
}
