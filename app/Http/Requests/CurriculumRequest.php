<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CurriculumRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email:rfc,dns'],
            'phone' => ['required', 'min:14', 'max:14'],
            'role' => ['required', 'max:255'],
            'schooling' => ['required'],
            'observation' => ['nullable', 'max:255'],
            'curriculum-file' => ['required', 'file', 'max:1024']
        ];
    }
}
