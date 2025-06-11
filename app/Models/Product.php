<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey='prodct_id';
    protected $fillable=['pname','price','description'];
    public function orderDetails(){
        return $this->hasMany(OrderDeetail::class,'product_id');
    }
}
