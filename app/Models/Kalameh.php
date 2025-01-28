<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kalameh extends Model
{
    use HasFactory;
    protected $fillable = [
        'key',
        'hajm',
        'wazn',
        'masafat'
    ];
}
