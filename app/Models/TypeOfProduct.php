<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function products(){
        return $this->hasMany(Product::class, 'type_of_product' , 'id');
    }
}
