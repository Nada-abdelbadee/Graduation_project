<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
        'name',
        'price',
        'offer',
        'image',
        'type_of_product',
        'add_to_cart',
        'wishlist',
        'user_id',
    ];
    public function category(){
        return $this->belongsTo(Category::class , 'category' , 'id');
    }
    public function TypeOfProduct(){
        return $this->belongsTo(TypeOfProduct::class, 'type_of_product' , 'id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

}
