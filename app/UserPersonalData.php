<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPersonalData extends Model
{
    //
    /**
     *   Model associate with User
     */
    public function user(){
       return $this->belongsTo(User::class);
    }
}
