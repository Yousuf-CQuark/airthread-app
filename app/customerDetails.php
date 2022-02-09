<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customerDetails extends Model
{
    //
    protected $fillable = ['customer_id','shirtInp','heightInp','preferedInp','chestInp','waistInp','sleeveInp','status'];
}
