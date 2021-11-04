<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardSection extends Model
{
    use HasFactory;

    protected $table = 'card_sections';
    protected $fillable = ['icon', 'title', 'content'];
}
