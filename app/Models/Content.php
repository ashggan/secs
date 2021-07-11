<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'subTitle',
        'desc',
        'bg_img',
        'sec_name'
    ];
}
