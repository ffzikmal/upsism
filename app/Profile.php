<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){
        $imagePath = ($this->image) ? $this->image : 'profile/V5FC0uORoIAm2iZKRL7m2KquxsxzQ3SEm3pXfgp0.png';
        return '/storage/' . $imagePath;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
