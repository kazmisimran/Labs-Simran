<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReadyRequest extends FormRequest
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
            'caption'=>'required',
            'button'=>'required',
        ];
    }

    public function messages()
    {
        return[
            'title.required'=>'Title required',
            'caption.required'=>'Caption required',
            'button.required'=>'Button required',
        ];
    }
}
