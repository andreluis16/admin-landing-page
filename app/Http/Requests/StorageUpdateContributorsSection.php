<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorageUpdateContributorsSection extends FormRequest
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
        $rules =  [
            'image' => ['required', 'image'],
            'name' => ['required', 'min:2', 'max:50']
        ];

        if($this->method() == 'PUT'){
           $rules['image'] = ['nullable', 'image'];
        }
        return $rules;
    }
}
