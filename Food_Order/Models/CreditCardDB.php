<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCardDB extends Model
{
    use HasFactory;
    protected $fillable = ['transaction_id','name','email','paid_amount','card_number','card_cvc','card_exp_month','card_exp_year'];
}
