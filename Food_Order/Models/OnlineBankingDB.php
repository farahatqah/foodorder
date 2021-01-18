<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineBankingDB extends Model
{
    use HasFactory;
    protected $fillable = ['transaction_id','bank_type','acc_num','paid_amount'];}
