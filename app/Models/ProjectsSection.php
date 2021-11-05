<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsSection extends Model
{
    use HasFactory;

    protected $table = 'projects_sections';
    protected $fillable = ['title', 'phrase'];
}
