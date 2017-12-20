<?php

namespace terramovil\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
            'identi'=>'required|max:15',
            'name'=>'required|max:255',
            'last_name'=>'required|max:255',
            'user_name'=>'required|max:20',
            'password'=>'required|max:255',
            'email'=>'required|max:30',
            'adress'=>'required|max:255',
            'celphone'=>'required|max:20',
        ];
    }
}
