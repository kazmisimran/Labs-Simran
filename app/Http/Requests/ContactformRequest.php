<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactformRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required|min:10',
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'Name required',
            'email.required'=>'Email required',
            'subject.required'=>'Subject required',
            'message.required'=>'Message required',
        ];
    }
}
