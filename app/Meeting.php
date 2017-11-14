<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    //
    protected $fillable=["time","title",'description'];
    public function Users()
    {
        # code...
        return $this->belongsToMany("App\User","User_meeting","meeting_id","user_id");
    }
}
