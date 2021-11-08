<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NetworksSection extends Model
{
    use HasFactory;

    protected $table = 'networks_sections';
    protected $fillable = ['image', 'link'];
}
