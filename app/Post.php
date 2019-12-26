<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Какая модель и к какой категории есть связь, метод возвращает связь
    public function categories(){
        return $this->belongsTo('App\Category', 'category_id');
    }
}
