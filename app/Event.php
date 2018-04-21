<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = ['type', 'title', 'content', 'date', 'location', 'capacity', 'main_image', 'sub_image', 'image_01', 'image_02'];
}
