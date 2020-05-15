<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeserviceRequest extends FormRequest
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
            'icon'=>'required',
            'title'=>'required',
            'description'=>'required',
        ];
    }

    public function messages()
    {
        return[
            'icon.required'=>'Icon required',
            'title.required'=>'Title required',
            'description.required'=>'Description required',
        ];
    }
}
