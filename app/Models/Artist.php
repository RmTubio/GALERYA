<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $table = 'artists';
    protected $primarykey = 'id';
    protected $fillable = [
        'fname',
        'minitial',
        'lname',
        'email',
        'degree',
        'year',
        'daterecorded',
        'artistimg',
    ];
}
