<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eloquent extends Model
{
    protected $primaryKey = 'uid';
    protected $table="eloquents";
    public $timestamps = false;
}
