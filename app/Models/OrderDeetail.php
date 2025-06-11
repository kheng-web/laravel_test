<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDeetail extends Model
{
    public $incrementing=false;
    public $timestamps=false;
    protected $primaryKey=['order_id','product_id'];
    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
    public function order(){
        return $this->belongsTo(Order::class,'order_id');
    }
}
