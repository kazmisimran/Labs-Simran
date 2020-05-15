<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomemenuRequest extends FormRequest
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
            'lien1'=>'required|max:10',
            'lien2'=>'required|max:10',
            'lien3'=>'required|max:10',
            'lien4'=>'required|max:10',
        ];
    }

    public function messages()
    {
        return [
            'logo.required'=>'Logo required',  
            'lien1.required'=>'Field can not be empty', 
            'lien2.required'=>'Field can not be empty', 
            'lien3.required'=>'Field can not be empty', 
            'lien4.required'=>'Field can not be empty', 
            'lien1.max'=>'Maximum 10 caractères',
            'lien2.max'=>'Maximum 10 caractères',
            'lien3.max'=>'Maximum 10 caractères',
            'lien4.max'=>'Maximum 10 caractères'

        ];
    }
}
