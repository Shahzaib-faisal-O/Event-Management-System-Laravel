<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function images() {
        return $this->hasMany(EventImage::class);
    }
    protected $fillable = ['title', 'description', 'date', 'location', 'category'];

}
