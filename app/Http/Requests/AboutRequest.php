<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'title'=>'required',
            'text1'=>'required',
            'text2'=>'required',
            'button'=>'required',
            'link'=>'required',
        ];
    }

    public function messages()
    {
        return[
            'title.required'=>'Title is required',
            'text1.required'=>'Field cannot be empty',
            'text2.required'=>'Field cannot be empty',
            'button.required'=>'Button required',
            'link.required'=>'Link is required',
        ];
    }
}
