<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyMetaData extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'website','license_image','images','social_networks', 'logo'
    ];

    protected $table  = "company_meta_data";

    public function setImagesAttribute($value)
    {
        $this->attributes['images'] = json_encode($value);
    }

    public function setSocialNetworksAttribute($value)
    {
        $this->attributes['social_networks'] = json_encode($value);
    }

    public function company()
    {
        return $this->belongsTo(Api\User::class);
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'images' => 'array',
        'social_networks' => 'array',
    ];
}
