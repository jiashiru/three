<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $table = 'carousel';

    public $primaryKey = 'carousel_id';

    public $timestamps = false;
}
