<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'from',
        'services',
        'purposes',
        'files_description',
        'website',
        'deadline',
        'email',
        'phone',
        'references'
    ];
}
