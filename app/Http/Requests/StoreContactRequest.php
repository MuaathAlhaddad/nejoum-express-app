<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'name'    => 'required|regex:/^(\s*[a-zA-Z.\u0621-\u064A]+){2,}$/',
            'email'   => "regex:/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/i",
            'phone'   => 'required|regex:/^(\+?6?01)[0-46-9]-*[0-9]{7,8}$/',
            'subject' => 'required|max:20|min:1500',
            'message' => 'required|max:20|min:1500',
        ];
    }
}
