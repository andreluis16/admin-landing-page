<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContributorsSection extends Model
{
    use HasFactory;

    protected $table = 'contributors_sections';
    protected $fillable = ['image', 'name'];
}
