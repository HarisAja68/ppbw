<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class redmiModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_readmi';
    protected $guarded = [];
}
