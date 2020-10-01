<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transactions extends Model
{
    protected $fillable=['transactionID', 'firstName', 'lastName', 'email', 'paymentMethod', 'productName', 'productPrice', 'totalPrice', 'quantity'];
}
