<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = ['first_name','last_name','email','password','date_of_birth'
                            ,'gender','annual_income','occupation','family_type','manglik','expected_income'
                            ,'expected_occupation','expected_family_type','expected_manglik','login_type','google_id'];
}
