<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    protected $fillable = ['id', 'name'];

    public function cities()
    {
        return $this->hasMany('App\Models\Cities');
    }
}
