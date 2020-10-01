<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    protected $fillable = ['serviceName', 'serviceDescription', 'serviceLink'];
}