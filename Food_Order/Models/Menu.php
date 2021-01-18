<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $primaryKey = 'food_id';
    protected $fillable=['food_name', 'food_price'];

    public function Order(){
        return $this->hasMany('Order', 'order_id');
    }
}
