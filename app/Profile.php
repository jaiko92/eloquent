<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //relacion uno a muchos 
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
