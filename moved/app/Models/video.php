<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
      use HasFactory;
    protected $fillable=[

'video',
'tittle',
'targeted_views',
'reached_views',
'targeted_duration',
'location',
'user',
'question',
'answer',
'time',
    ];
}
