<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     protected $primaryKey='order_id';
    protected $fillable=['customer','order_date','total_amount'];
    public function orderDetails(){
        return $this->hasMany(OrderDeetail::class,'order_id');
    }
}
