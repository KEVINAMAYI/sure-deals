<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nette\Utils\Image;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }


    public function tags(){
        return $this->belongsToMany(Tag::class,'product_tags','product_id');
    }

    public function deals(){
        return $this->belongsToMany(Deal::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class,'product_id');
    }
}
