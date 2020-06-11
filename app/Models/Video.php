<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Auth;

class Video extends Model
{
    protected $touches = ['user'];
    protected $guarded = ['created_at', 'updated_at'];
    
    // Relation  Many to One (User)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // Author 
    public function author()
    {
        $user= Auth::check();

        if ($user) {
            if (Auth::user()->id == $this->user_id) {
                return true;
            }
        } else return false;
    }
}
