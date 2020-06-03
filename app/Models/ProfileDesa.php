<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileDesa extends Model
{
    protected $fillable = [
        'judul',
        'description'
    ];

    public function profile_desa_images()
    {
        return $this->hasMany('App\Models\ProfileDesaImage');
    }
    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('d F Y H:i:s');
    }

    public function getUpdatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['updated_at'])
        ->diffForHumans();
    }
}
