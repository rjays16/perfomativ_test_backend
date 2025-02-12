<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonalInformation extends Model
{
    use SoftDeletes;
    
    protected $table = 'personal_informations';
    
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'date_of_birth',
        'state',
        'city',
        'country',
        'image'
    ];

    protected $dates = ['date_of_birth'];
}