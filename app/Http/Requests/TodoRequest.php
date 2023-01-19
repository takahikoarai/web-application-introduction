<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
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
            'todo' => 'required|string|max:20'
        ];
    }

    public function messages()
    {
        return [
            'todo.required' => 'Todoの入力は必須です',
            'todo.max' => 'Todoは20文字以内で入力してください'
        ];
    }
}
