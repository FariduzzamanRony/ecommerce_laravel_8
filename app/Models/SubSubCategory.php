<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Re_Category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }


    public function Re_SubCategory(){
        return $this->belongsTo(SubCategory::class,'subcategory_id','id');
    }

}
