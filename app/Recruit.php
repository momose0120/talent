<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruit extends Model
{
    protected $table = 'recruits';
    protected $fillable = ['type', 'title', 'job', 'salary', 'work_location', 'work_hours', 'work_period', 'welfare'];

}
