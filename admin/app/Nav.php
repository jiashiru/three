<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class Nav extends Model{
    protected $table = 'nav';
    public $timestamps = false;
    public $primaryKey = "nav_id";
}