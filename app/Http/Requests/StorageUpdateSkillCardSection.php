<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorageUpdateSkillCardSection extends FormRequest
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
            'title' => ['required', 'min:3', 'max:30'],
            'content' => ['required', 'min:10', 'max:200'],
            'image' => ['required', 'image']
        ];

        if($this->method() == 'PUT'){
           $rules['image'] = ['nullable', 'image'];
        }
        return $rules;
    }
}
