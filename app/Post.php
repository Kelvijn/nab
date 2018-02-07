<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function user()
    {
        return Cms_user::where('id', $this->cms_users_id)->first();
        ;
    }
}
