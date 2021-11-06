<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlideSection extends Model
{
    use HasFactory;

    protected $table = 'slide_sections';
    protected $fillable = ['image', 'title', 'content'];
}
