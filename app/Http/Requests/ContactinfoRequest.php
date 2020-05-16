<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactinfoRequest extends FormRequest
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
            'text'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required',
        ];
    }

    public function messages()
    {
        return[
            'title.required'=>'Title required',
            'text.required'=>'Text required',
            'address.required'=>'Address required',
            'phone.required'=>'Phone required',
            'email.required'=>'Email required',
        ];
    }
}
