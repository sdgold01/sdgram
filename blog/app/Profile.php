<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage() 
    {
        $imagePath = ($this->image) ?  $this->image : 'profile/GHI332C1HAd8MwZIF9KcNGVnCjBT2qq0bMEMql0n.jpg';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class); 
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
