<?php

namespace App\Http\Requests;

    use Illuminate\Contracts\Validation\ValidationRule;
    use Illuminate\Foundation\Http\FormRequest;

    class BooksRequest extends FormRequest
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
         * @return array<string, ValidationRule|array|string>
         */
        public function rules(): array
        {
            return [
                'book_title' => 'required|not_only_whitespace|min:3|max:255|unique:books,title',
                'author_name' => 'required|not_only_whitespace|min:2|max:100'
            ];
        }

        public function messages(): array
        {
            return [
                'author_name.required' => 'Не забывайте указать имя автора',
                'book_title.required' => 'Без названия книги ни как',
            ];
        }
    }
