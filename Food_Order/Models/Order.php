<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $primaryKey = 'order_id';
    protected $fillable = ['cust_id', 'food_id', 'quantity'];
    public function Customer(){
        return $this->belongsTo('Customer','cust_id');
    }
    public function Menu(){
        return $this->hasMany('Menu', 'food_id');
    }
}
