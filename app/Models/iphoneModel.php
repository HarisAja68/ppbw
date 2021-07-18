<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class iphoneModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_iphone';
    protected $guarded = [];
}
