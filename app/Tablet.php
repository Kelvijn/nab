<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Tablet extends Model
{
    //
    public function test()
    {

        $test = DB::table('tablets')
        ->select('*')
       
        ->get();

       


        return $this->$test;
    }
    public function authors()
    {
        
        return $this->belongsToMany('App\Cms_user', 'tablets_cms_users', 'tablets_id', 'cms_users_id');
    }
}
