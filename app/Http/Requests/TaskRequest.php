<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:25'],
            'description' => ['required', 'string', 'max:25'],
            'long_description' => ['required', 'string', 'max:200'],
        ];
    }
}
