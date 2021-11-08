<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnersSection extends Model
{
    use HasFactory;

    protected $table = 'partners_sections';
    protected $fillable = ['title', 'phrase'];
}
