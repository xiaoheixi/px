<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administrators extends Model
{
    protected $fillable=['adminName', 'adminUsername', 'adminPassword', 'adminEmail'];
}
