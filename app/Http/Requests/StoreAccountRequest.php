<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAccountRequest extends FormRequest
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
            'firstName' => 'required|string|min:2',
            'lastName' => 'required|string|min:2',
            'email' => 'required|email',
            'companyName' => 'nullable',
            'position' => 'nullable',
            'phone1' => 'nullable',
            'phone2' => 'nullable',
            'phone3' => 'nullable'
        ];
    }
}
