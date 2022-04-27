<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\PseudoTypes\True_;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required',
            'role_id' =>'required',
            // 'cost'=>'required',
            // 'category'=>'required',
            

        ];
    }
    public function messages()
{
    return [
        'name.required' => "The name can't be empty"  ,
        'email.required' => "The email can't be empty",
        'email.unique' => "The email already exist",
        'password.required' => "The password can't be empty",
        // 'role_id.required' => "The role can't be empty",
        // 'cost.required' => "The cost can't be empty",
        // 'category.required' => "The category can't be empty",
        
    ];
}
}
