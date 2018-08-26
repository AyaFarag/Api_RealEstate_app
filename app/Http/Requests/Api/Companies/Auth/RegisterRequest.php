<?php

namespace App\Http\Requests\Api\Companies\Auth;

use App\Http\Requests\Api\AbstractRequest;

class RegisterRequest extends AbstractRequest
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
            'name'=>'required|max:191',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|confirmed',
            'phone'=>'required|unique:users',
            'description' => 'required|string',
            'city_id'=>'required|exists:cities,id',
            'specialization_id'=>'required|exists:specializations,id',
            'website' => 'required|url',
            'logo' => 'required|url'
        ];
    }

    public function requestAttributes(){
        return [
            'name',
            'email',
            'password',
            'phone',
            'description',
            'city_id',
            'specialization_id',
            'logo',
            'website'
        ];
    }
}
