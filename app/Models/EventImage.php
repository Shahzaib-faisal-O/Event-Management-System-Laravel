<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventImage extends Model
{
    use HasFactory;

    // Allow mass assignment for the following attributes
    protected $fillable = ['event_id', 'image_path'];
}
