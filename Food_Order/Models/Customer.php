<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'cust_id';
    protected $fillable = ['c_name', 'c_phoneNo', 'c_address'];
    public function Order(){
        return $this->hasMany('Order','order_id');
    }
}
