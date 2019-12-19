<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = array('titre','description');


    public function getRouteKeyName()
    {
    	return 'slug';
    }

//cette fonction nous permet de gerer le slug du sorte que meme si on modifie le titre le slug reste le meme
    protected static function Boot()
    {
    	//cette methode se trouve dans le modele
    	parent::Boot();

    	static::creating(function($event){
    		$event->slug = str_slug($event->titre);
    	});
    }

}
