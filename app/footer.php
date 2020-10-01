<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class footer extends Model
{
    protected $fillable = ['footerName', 'footerText', 'footerLink'];
}
