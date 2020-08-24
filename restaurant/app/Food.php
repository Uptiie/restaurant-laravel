<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

//take models from migrate file and turn them into fillable properties

class Food extends Model
{
    protected $fillable=['name', 'description', 'price', 'category_id', 'image'];

    public function category(){
        return $this->hasOne(Category::class,'id','category_id');
    }
}
