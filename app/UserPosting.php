<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPosting extends Model
{
    protected $table = 'userposts';
    protected $guarded = ['id'];
}
