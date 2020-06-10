<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable = ['company_id','employee_name', 'employee_position', 'employee_age', 'employee_phone_number'];

    public function company(){
        return $this->belongsTo('App\company');
    }
}