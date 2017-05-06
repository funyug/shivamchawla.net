<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\User;
use TCG\Voyager\Voyager;

class Comment extends Model
{
    public function post() {
        return $this->belongsTo(Voyager::modelClass('Post'),'post_id','id');
    }

    public function user() {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
