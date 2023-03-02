<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SourceBusiness extends Model
{
    use SoftDeletes;
    use HasFactory;
protected $table='businesses';
    protected $fillable=['name','name_loc'];
}
