<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Market extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable=['name','name_loc'];
}
