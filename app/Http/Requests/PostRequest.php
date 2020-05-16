<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'day'=>'required',
            'month'=>'required',
            'year'=>'required',
            'img'=>'required',
            'text'=>'required',
        ];
    }

    public function messages()
    {
        return[
            'title.required'=>'Title required',
            'day.required'=>'Required',
            'month.required'=>'Required',
            'year.required'=>'Required',
            'img.required'=>'Image required',
            'text.required'=>'Text required',
        ];
    }
}
