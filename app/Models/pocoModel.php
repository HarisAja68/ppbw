<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pocoModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_poco';
    protected $guarded = [];
}
