<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreSection extends Model
{
    use HasFactory;

    protected $table = 'are_sections';

    protected $fillable = ['title', 'phrase'];
}
