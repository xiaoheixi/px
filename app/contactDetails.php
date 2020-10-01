<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactDetails extends Model
{
    protected $fillable = ['contactName', 'contactOffice', 'contactPostal', 'contactAddress', 'contactEmail'];
}
