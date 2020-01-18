<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function categories(){
        return $this->hasMany('App\Category', 'parent_id'); /*Устанавливаем связь hasMany: родительские категории имеют несколько детей*/
    }
    public function posts(){
        return $this->hasMany('App\Post', 'category_id', 'id');/*Категория имеет много постов. Связь по ключам category_id в постах и id в категориях */
    }
}
