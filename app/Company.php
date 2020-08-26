<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'email', 'web_site', 'logo'
    ];

    public function employees()
    {
        return $this->hasMany('App\Employee');
    }
}
