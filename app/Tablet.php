<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Cms_user;
use App\Tablets_cms_user;


class Tablet extends Model
{
    //
    public function authors()
    {
        $authors = DB::table('tablets')
        ->select('cms_users.name')
        ->join('tablets_cms_users', 'tablets_cms_users.tablets_id', '=', 'tablets.id')
        ->join('cms_users', 'cms_users.id', '=', 'tablets_cms_users.cms_users_id')
        
        ->where('tablets_cms_users.tablets_id',$this->id)
        ->get();
        
        return $authors;
    }
    public function paraphrases()
    {
        $paraphrases = DB::table('tablets')
        ->join('tablets_paraphrases', 'tablets_paraphrases.tablets_id', '=', 'tablets.id')
        ->join('paraphrases', 'paraphrases.id', '=', 'tablets_paraphrases.paraphrases_id')
        
        ->where('tablets_paraphrases.tablets_id',$this->id)
        ->where('paraphrases.released','1')
        
        ->get();
        
        return $paraphrases;
    }
    public function joins()
    {
        $joins = DB::table('tablets')
        
        ->join('tablets_tablets', 'tablets_tablets.tablets_id', '=', 'tablets.id')
        
        ->where('tablets_tablets.tablets_id',$this->id)
        ->get();
        
        return $joins;
    }
     
    public function transliterations()
    {
        $transliterations = DB::table('tablets')
        ->join('tablets_transliterations', 'tablets_transliterations.tablets_id', '=', 'tablets.id')
        ->join('transliterations', 'transliterations.id', '=', 'tablets_transliterations.transliterations_id')
        
        ->where('tablets_transliterations.tablets_id',$this->id)
        ->get();
        
        return $transliterations;
    }
    public function archives()
    {
        $archives = DB::table('tablets')
        
        ->join('tablets_archives', 'tablets_archives.tablets_id', '=', 'tablets.id')
        ->join('archives', 'archives.id', '=', 'tablets_archives.archives_id')
        
        ->where('tablets_archives.tablets_id',$this->id)
        ->get();
        
        return $archives;
    }
    public function proveniences()
    {
        $authors = DB::table('tablets')
        ->join('tablets_proveniences', 'tablets_proveniences.tablets_id', '=', 'tablets.id')
        ->join('proveniences', 'proveniences.id', '=', 'tablets_proveniences.proveniences_id')
        
        ->where('tablets_proveniences.tablets_id',$this->id)
        ->get();
        
        return $authors;
    }
    public function places()
    {
        $places = DB::table('tablets')
        
        ->join('tablets_places', 'tablets_places.tablets_id', '=', 'tablets.id')
        ->join('places', 'places.id', '=', 'tablets_places.places_id')
        
        ->where('tablets_places.tablets_id',$this->id)
        ->get();
        
        return $places;
    }
    public function other_markings()
    {
        $other_markings = DB::table('tablets')
 
        ->join('tablets_other_markings', 'tablets_other_markings.tablets_id', '=', 'tablets.id')
        ->join('other_markings', 'other_markings.id', '=', 'tablets_other_markings.other_markings_id')
        
        ->where('tablets_other_markings.tablets_id',$this->id)
        ->get();
        
        return $other_markings;
    }
    

    public function philological_notes ()
    {
        $philological_notes = DB::table('tablets')
        
        ->join('tablets_philological_notes', 'tablets_philological_notes.tablets_id', '=', 'tablets.id')
        ->join('philological_notes', 'philological_notes.id', '=', 'tablets_philological_notes.philological_notes_id')
        
        ->where('tablets_philological_notes.tablets_id',$this->id)
        ->get();
        
        return $philological_notes;
    }

    public function text_types ()
    {
        $text_types = DB::table('tablets')
        
        ->join('tablets_text_types', 'tablets_text_types.tablets_id', '=', 'tablets.id')
        ->join('text_types', 'text_types.id', '=', 'tablets_text_types.text_types_id')
        
        ->where('tablets_text_types.tablets_id',$this->id)
        ->get();
        
        return $text_types;
    }

    public function akkadian_keywords  ()
    {
        $authors = DB::table('tablets')
        
        ->join('tablets_akkadian_keywords', 'tablets_akkadian_keywords.tablets_id', '=', 'tablets.id')
        ->join('akkadian_keywords', 'akkadian_keywords.id', '=', 'tablets_akkadian_keywords.akkadian_keywords_id')
        
        ->where('tablets_akkadian_keywords.tablets_id',$this->id)
        ->get();
        
        return $authors;
    }
    public function general_keywords   ()
    {
        $authors = DB::table('tablets')
        
        ->join('tablets_general_keywords', 'tablets_general_keywords.tablets_id', '=', 'tablets.id')
        ->join('general_keywords', 'general_keywords.id', '=', 'tablets_general_keywords.general_keywords_id')
        
        ->where('tablets_general_keywords.tablets_id',$this->id)
        ->get();
        
        return $authors;
    }
}
