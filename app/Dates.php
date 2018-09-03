<?php

namespace DacingWithDeath;

use Illuminate\Database\Eloquent\Model;

class Dates extends Model
{
    protected $table = 'dates';
    protected $fillable  = ['name','email', 'cita'];

}
