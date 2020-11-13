<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $table = 'childs';
    protected $fillable = ['id', 'name', 'gender', 'parent_id'];

    public function parent()
    {
        return $this->belongsTo('App\Models\Parents', 'parent_id', 'id');
    }
}
