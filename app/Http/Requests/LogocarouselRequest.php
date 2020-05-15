<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogocarouselRequest extends FormRequest
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
            'logo'=>'required',
            'caption'=>'required|max:50',
        ];
    }

    public function messages()
    {
        return[
            'logo.required'=>'Logo required',
            'caption.required'=>'Caption required',
            'caption.max'=>'Maximum 50 caractères',
        ];

    }
}
