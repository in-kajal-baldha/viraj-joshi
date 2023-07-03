<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnquireBottom extends FormRequest
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
            'name1'=>'required',
            'number1'=>'required',
            'address1'=>'required',
            'massage1'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'name1.required'=>'The name is required ',
            'number1.required'=>'The number is required ',
            'address1.required'=>'The address is required ',
            'massage1.required'=>'The massage is required ',


        ];
    }
}

