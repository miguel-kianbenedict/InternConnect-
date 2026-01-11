<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OjtInformation extends Model
{
    protected $table = 'ojt_informations';

    protected $fillable = [
        'company_name',
        'company_address',
        'nature_of_business',
        'networking',
        'training_status',
        'level',
        'start_date',
        'end_date'
    ];
}



