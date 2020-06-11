<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// Import DB yg Login
use Auth;

class Artikel extends Model
{
    protected $touches = ['user'];
    protected $guarded = ['created_at', 'updated_at'];
    
    // Relation Many To One  (User)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // Mutator
    public function getImgAttribute($value)
    {
        return url('artikels', $value);
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
