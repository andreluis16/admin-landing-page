<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InitialSection extends Model
{
    use HasFactory;

    protected $table = 'initial_sections';

    protected $fillable = ['title', 'image', 'content'];
}
