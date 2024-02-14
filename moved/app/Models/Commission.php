<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    use HasFactory;
    protected $fillable=['position',
'required',
'own_fc',
'team_club',
'reward',
'rank',
'token',
'period',]
}
