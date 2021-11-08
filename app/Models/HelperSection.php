<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelperSection extends Model
{
    use HasFactory;

    protected $table = 'helper_sections';
    protected $fillable = ['icon', 'helper'];
}
