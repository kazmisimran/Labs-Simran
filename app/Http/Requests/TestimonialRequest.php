<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
            'text'=>'required|min:60|max:140',
            'name'=>'required',
            'position'=>'required',
            'img'=>'required'
        ];
    }

    public function messages()
    {
        return[
            'text.required'=>'Text is required',
            'text.min'=>'Minimum 60 carctères',
            'text.max'=>'Maximum 140 caractères',
            'name.required'=>'Name is required',
            'position.required'=>'Position is required',
            'img.required'=>'Image is required',
        ];
    }
}
