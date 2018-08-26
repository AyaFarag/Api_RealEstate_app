<?php

namespace App\Http\Requests\Api\Companies;

use App\Http\Requests\Api\AbstractRequest;

class CompanyMetaDataRequest extends AbstractRequest
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
            'website' => 'string',
            'license_image'=>'string',
            'images'=>'array',
            'logo' => 'url',
            'social_networks'=>'array'
        ];
    }
    public function requestAttributes()
    {
        return [
            'website',
            'license_image',
            'images',
            'logo',
            'social_networks',
        ];
    }
}
