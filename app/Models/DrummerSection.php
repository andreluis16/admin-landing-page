<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrummerSection extends Model
{
    use HasFactory;

    protected $table = 'drummer_sections';
    protected $fillable = ['title', 'phrase'];
}
