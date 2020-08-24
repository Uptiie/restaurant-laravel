<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Food;

class Category extends Model
{
    protected $fillable=['name' ];
    public function category(){
        return $this->hasOne(Category::class,'category_id','id');
    }
}
