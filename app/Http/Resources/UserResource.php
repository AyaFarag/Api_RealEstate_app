<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Models\Api\User;
use Auth;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $data = [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'role' => $this->role,
            'country' => $this->city->country->only('id', 'name'),
            'city' => $this->city->only('id','name'),
            'status' => $this->status ? true : false,
            'confirmed_phone' => isset($this->confirmed_phone),
            'token' => $this->api_token,
            'device_token' => $this->device_token
        ];

        if ($this -> role === User::COMPANY_ROLE) {
            $data = array_merge($data, [
                'meta_data' => new CompanyMetaDataResource($this->meta),
                'category' => $this->specialization->category->only('id','name'),
                'specialization' => $this->specialization->only('id','name'),
                'average_rating' => (float) $this->companyRatings()->avg('rate') ?? 0,
                'comments_count' => $this->companyComments()->count(),
                'views' => $this->views
            ]);
        }

        return $data;
    }
}
