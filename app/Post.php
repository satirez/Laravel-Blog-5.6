<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
protected $fillable = [
	'user_id', 'user_name', 'category_id', 'name', 'slug', 'excerpt','body','status','file'
];


public function user(){


		// PERTENECE A UN USUARIO
    	return $this->belongsTo(User::class);
    }


public function category(){

		// PERTENECE A UNA CATEGORIA
    	return $this->belongsTo(Category::class);
    }



    public function tags(){

    	// tiene y PERTENEce A muchas  ETIQUETA
    	return $this->belongsToMany(Tag::class);
    }
}
