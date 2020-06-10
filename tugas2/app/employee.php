<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable = ['company_name', 'company_address', 'company_founder','company_age' ];
}