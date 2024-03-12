<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|not_only_whitespace|min:3|max:50|',
            'surname' => 'required|not_only_whitespace|min:2|max:50|unique:users',
            'email' => 'required|email|unique:users|regex:/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Не забывайте указать имя',
            'surname.required' => 'Без фамилии ни как',
            'name.min' => 'Имя должно быть длиннее',
            'surname.min' => 'Должно быть больше трех букв'
        ];
    }
}
