<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';

    public $primaryKey = 'role_id';

    public $timestamps = false;

    public function nodes()
    {
        return $this->belongsToMany('App\Model\Node', 'role_node', 'role_id', 'node_id');
    }

}