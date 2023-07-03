<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enquire extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "enquire";
    protected $fillable = [
        'name',
        'number',
        'address',
        'massage',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];


}
