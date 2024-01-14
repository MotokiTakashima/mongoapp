<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Comment extends Moloquent
{
    protected $collection = 'comments';
}
