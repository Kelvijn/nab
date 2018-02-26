<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Cms_user;
use App\Tablets_cms_user;


class Tablet extends Model
{
    //
    public function test()
    {
        $authors = DB::table('tablets')
        ->select('cms_users.name')
        ->join('tablets_cms_users', 'tablets_cms_users.tablets_id', '=', 'tablets.id')
        ->join('cms_users', 'cms_users.id', '=', 'tablets_cms_users.cms_users_id')
        
        ->where('tablets_cms_users.tablets_id',$this->id)
        ->get();
        

        
       /* $test = $this->id;
        $users = Cms_user::all();
        $authors = Tablets_cms_user::where('tablets_id',$test)
        ->join($users, 'leagues.country_id', '=', 'countries.country_id')
        ->where('countries.country_name', $country)-> get();
        
        if ( $authors === null ){
            
        }else {
        
        }*/

        
       


        return $authors;
    }
    public function authors()
    {
        
        return $this->belongsToMany('App\Cms_user', 'tablets_cms_users', 'tablets_id', 'cms_users_id');
    }
}
