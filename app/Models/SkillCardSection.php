<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillCardSection extends Model
{
    use HasFactory;

    protected $table = 'skill_card_sections';
    protected $fillable = ['image', 'title', 'content'];
}
