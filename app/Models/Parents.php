<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $table = 'parents';
    protected $fillables = ['id', 'name', 'gender'];

    public function childs()
    {
        return $this->hasMany('App\Models\Child','parent_id');
    }
}
