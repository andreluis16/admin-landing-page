<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorageUpdateContactSection extends FormRequest
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
            'address' => ['required', 'min:3', 'max:200'],
            'telephone' => ['required', 'min:6', 'max:20'],
            'email' => ['required', 'min:3', 'max:200'],
            'link' => ['required', 'min:25', 'max:5000']
        ];
    }
}
