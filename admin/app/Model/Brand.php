<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'goods_brand';

    public $primaryKey = 'brand_id';

    public $timestamps = false;



}